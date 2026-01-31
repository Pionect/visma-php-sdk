<?php

declare(strict_types=1);

namespace Pionect\VismaSdk\Generator\Commands;

use Crescat\SaloonSdkGenerator\CodeGenerator;
use Crescat\SaloonSdkGenerator\Data\Generator\Config;
use Crescat\SaloonSdkGenerator\Data\TaggedOutputFile;
use Crescat\SaloonSdkGenerator\Generators\PestTestGenerator;
use Crescat\SaloonSdkGenerator\Generators\ResourceGenerator;
use Crescat\SaloonSdkGenerator\Parsers\OpenApiParser;
use Pionect\VismaSdk\Generator\Generators\PlainJsonConnectorGenerator;
use Pionect\VismaSdk\Generator\Generators\PlainJsonDtoGenerator;
use Pionect\VismaSdk\Generator\Generators\PlainJsonRequestGenerator;
use Pionect\VismaSdk\Generator\Services\ComposerSetup;
use Pionect\VismaSdk\Generator\Services\PintRunner;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'generate',
    description: 'Generate a Plain JSON SDK from an OpenAPI specification',
)]
class GenerateCommand extends Command
{
    private SymfonyStyle $io;

    protected function configure(): void
    {
        $this
            ->addArgument(
                'spec',
                InputArgument::REQUIRED,
                'Path to OpenAPI specification file (local file or URL)'
            )
            ->addOption(
                'dry-run',
                null,
                InputOption::VALUE_NONE,
                'Show what would be generated without writing files'
            )
            ->addOption(
                'skip-pint',
                null,
                InputOption::VALUE_NONE,
                'Don\'t run Pint to format generated files'
            );
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $this->io = new SymfonyStyle($input, $output);

        $specPath = $input->getArgument('spec');
        $outputDir = '.';
        $composerPath = rtrim($outputDir, '/').'/composer.json';

        try {
            $composerSetup = new ComposerSetup($composerPath);
            $namespace = $composerSetup->getNamespace();
        } catch (\RuntimeException $e) {
            $this->io->error($e->getMessage());

            return Command::FAILURE;
        }
        $dryRun = $input->getOption('dry-run');

        $this->io->title('Plain JSON SDK Generator');

        // Validate spec file
        if (! $this->isUrl($specPath) && ! file_exists($specPath)) {
            $this->io->error("Specification file not found: {$specPath}");

            return Command::FAILURE;
        }

        $this->io->section('Configuration');
        $this->io->listing([
            "Spec: {$specPath}",
            "Output: {$outputDir}",
            "Namespace (from composer.json): {$namespace}",
        ]);

        // Create config
        $config = new Config(
            connectorName: 'VismaConnector',
            namespace: $namespace,
            resourceNamespaceSuffix: 'Resources',
            requestNamespaceSuffix: 'Requests',
            dtoNamespaceSuffix: 'Dto',
            suffixRequestClasses: true,
        );

        // Parse specification
        $this->io->section('Parsing OpenAPI Specification');

        try {
            $parser = OpenApiParser::build($specPath);
            $specification = $parser->parse();
            $this->io->success('Specification parsed successfully');
        } catch (\Exception $e) {
            $this->io->error("Failed to parse specification: {$e->getMessage()}");

            return Command::FAILURE;
        }

        // Configure post-processors
        $postProcessors = [];

        $postProcessors[] = new PestTestGenerator;

        // Generate code using Plain JSON generators
        $this->io->section('Generating SDK');

        $codeGenerator = new CodeGenerator(
            config: $config,
            requestGenerator: new PlainJsonRequestGenerator($config),
            resourceGenerator: new ResourceGenerator($config),
            dtoGenerator: new PlainJsonDtoGenerator($config),
            connectorGenerator: new PlainJsonConnectorGenerator($config),
            postProcessors: $postProcessors,
        );

        try {
            $result = $codeGenerator->run($specification);
            $this->io->success('Code generated successfully');
        } catch (\Exception $e) {
            $this->io->error("Failed to generate code: {$e->getMessage()}");

            return Command::FAILURE;
        }

        // Write files
        if ($dryRun) {
            $this->io->section('Dry Run - Files that would be generated:');
            $this->listGeneratedFiles($this->io, $result, $outputDir);
        } else {
            $this->io->section('Writing Files');
            $this->writeGeneratedFiles($this->io, $result, $outputDir);

            $skipPint = $input->getOption('skip-pint');

            if (! $skipPint) {
                // Run Pint to format generated files
                (new PintRunner)->run($outputDir, $this->io);
            }

            $this->io->success("SDK generated successfully in {$outputDir}");
        }

        return Command::SUCCESS;
    }

    private function isUrl(string $path): bool
    {
        return str_starts_with($path, 'http://') || str_starts_with($path, 'https://');
    }

    private function listGeneratedFiles(SymfonyStyle $io, $result, string $outputDir): void
    {
        $files = [];

        foreach ($result->dtoClasses ?? [] as $name => $file) {
            $files[] = "{$outputDir}/src/Dto/{$name}.php";
        }

        foreach ($result->requestClasses ?? [] as $name => $file) {
            $files[] = "{$outputDir}/src/Requests/{$name}.php";
        }

        // Additional files (e.g., factories/tests) with explicit paths
        foreach ($result->additionalFiles ?? [] as $file) {
            if ($file instanceof TaggedOutputFile) {
                $files[] = rtrim($outputDir, '/').'/'.ltrim($file->path, '/');
            }
        }

        $io->listing($files);
        $io->note('Total: '.count($files).' files');
    }

    private function writeGeneratedFiles(
        SymfonyStyle $io,
        $result,
        string $outputDir,
    ): void {
        $written = 0;
        $skipped = 0;

        // Write DTOs
        foreach ($result->dtoClasses ?? [] as $file) {
            $className = $this->getClassNameFromPhpFile($file);
            $path = "{$outputDir}/src/Dto/{$className}.php";
            if ($this->writeFile($path, (string) $file)) {
                $written++;
            } else {
                $skipped++;
            }
        }

        // Write Requests - extract namespace suffix for subdirectory
        foreach ($result->requestClasses ?? [] as $file) {
            $className = $this->getClassNameFromPhpFile($file);
            $subDir = $this->getRequestSubdirectory($file);
            $path = "{$outputDir}/src/Requests/{$subDir}/{$className}.php";
            if ($this->writeFile($path, (string) $file)) {
                $written++;
            } else {
                $skipped++;
            }
        }

        // Write additional files (tests, factories, etc.) from post-processors
        foreach ($result->additionalFiles ?? [] as $file) {
            if ($file instanceof TaggedOutputFile) {
                // Respect provided relative path for factories
                $path = rtrim($outputDir, '/').'/'.ltrim($file->path, '/');
                $content = is_string($file->file) ? $file->file : (string) $file->file;
                if ($this->writeFile($path, $content)) {
                    $written++;
                } else {
                    $skipped++;
                }

                continue;
            }

            if ($file instanceof \Nette\PhpGenerator\PhpFile) {
                // Default PhpFile additional files go into tests directory (backwards compatible)
                $className = $this->getClassNameFromPhpFile($file);
                $path = "{$outputDir}/tests/{$className}.php";
                if ($this->writeFile($path, (string) $file)) {
                    $written++;
                } else {
                    $skipped++;
                }
            }
        }

        $io->text("Written: {$written} files");
        if ($skipped > 0) {
            $io->text("Skipped: {$skipped} files (already exist, use --force to overwrite)");
        }
    }

    private function getClassNameFromPhpFile(\Nette\PhpGenerator\PhpFile $file): string
    {
        foreach ($file->getNamespaces() as $namespace) {
            foreach ($namespace->getClasses() as $class) {
                return $class->getName();
            }
        }
        throw new \RuntimeException('No class found in PhpFile');
    }

    private function getRequestSubdirectory(\Nette\PhpGenerator\PhpFile $file): string
    {
        foreach ($file->getNamespaces() as $namespace) {
            $parts = explode('\\', $namespace->getName());

            return end($parts);
        }

        return 'Misc';
    }

    private function writeFile(string $path, string $content): bool
    {
        $dir = dirname($path);
        if (! is_dir($dir)) {
            mkdir($dir, 0755, true);
        }

        file_put_contents($path, $content);

        return true;
    }
}
