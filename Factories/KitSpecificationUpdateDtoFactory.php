<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\KitSpecificationUpdateDto;
use Pionect\VismaSdk\Enums\AttributeDetailUpdateOperationEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\KitSpecificationUpdateDto>
 */
class KitSpecificationUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'operation' => $this->faker->randomElement(AttributeDetailUpdateOperationEnum::cases()),
            'kitInventoryId' => $this->faker->uuid(),
            'revisionId' => $this->faker->uuid(),
            'descr' => $this->faker->word(),
            'isActive' => $this->faker->boolean(),
            'allowCompAddition' => $this->faker->boolean(),
            'isNonStock' => $this->faker->boolean(),
            'stockComponentLines' => [],
            'nonStockComponentLines' => [],
        ];
    }

    protected function modelClass(): string
    {
        return KitSpecificationUpdateDto::class;
    }
}
