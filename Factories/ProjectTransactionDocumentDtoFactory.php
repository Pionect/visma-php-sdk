<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ProjectTransactionDocumentDto;
use Pionect\VismaSdk\Enums\InventoryAdjustmentStatusEnum;
use Pionect\VismaSdk\Enums\JournalTransactionLineModuleEnum;
use Pionect\VismaSdk\Enums\ProjectTransactionDocumentOrigDocTypeEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\ProjectTransactionDocumentDto>
 */
class ProjectTransactionDocumentDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'refNbr' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'origDocNbr' => $this->faker->word(),
            'status' => $this->faker->randomElement(InventoryAdjustmentStatusEnum::cases()),
            'module' => $this->faker->randomElement(JournalTransactionLineModuleEnum::cases()),
            'origDocType' => $this->faker->randomElement(ProjectTransactionDocumentOrigDocTypeEnum::cases()),
            'note' => $this->faker->word(),
            'timeStamp' => $this->faker->word(),
            'lines' => [],
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return ProjectTransactionDocumentDto::class;
    }
}
