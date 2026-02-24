<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\InventoryCrossReferenceDto;
use Pionect\VismaSdk\Enums\InventoryCrossReferenceAlternateTypeEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\InventoryCrossReferenceDto>
 */
class InventoryCrossReferenceDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'alternateType' => $this->faker->randomElement(InventoryCrossReferenceAlternateTypeEnum::cases()),
            'bAccount' => null,
            'alternateId' => $this->faker->uuid(),
            'description' => $this->faker->sentence(),
            'uom' => $this->faker->word(),
            'timestamp' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return InventoryCrossReferenceDto::class;
    }
}
