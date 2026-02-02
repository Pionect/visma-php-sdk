<?php

declare(strict_types=1);

namespace Pionect\VismaSdk\Generator\Generators;

use Crescat\SaloonSdkGenerator\Data\Generator\ApiSpecification;
use Crescat\SaloonSdkGenerator\Data\Generator\Config;
use Crescat\SaloonSdkGenerator\Data\Generator\GeneratedCode;
use Crescat\SaloonSdkGenerator\Generators\PestTestGenerator;
use Crescat\SaloonSdkGenerator\Generators\TestGenerators\CollectionRequestTestGenerator;
use Crescat\SaloonSdkGenerator\Helpers\DtoResolver;
use Pionect\VismaSdk\Generator\Helpers\PlainJsonDtoResolver;

class PlainJsonTestGenerator extends PestTestGenerator
{
    /**
     * Override to use custom PlainJsonDtoResolver.
     */
    protected function createDtoResolver(Config $config, GeneratedCode $generatedCode): DtoResolver
    {
        $resolver = new PlainJsonDtoResolver($config);
        $resolver->setGeneratedCode($generatedCode);

        return $resolver;
    }

    /**
     * Override to use custom PlainJsonCollectionRequestTestGenerator.
     */
    protected function createCollectionTestGenerator(
        ApiSpecification $specification,
        GeneratedCode $generatedCode,
        string $namespace,
        DtoResolver $dtoResolver
    ): CollectionRequestTestGenerator {
        return new PlainJsonCollectionRequestTestGenerator($specification, $generatedCode, $namespace, $dtoResolver);
    }
}
