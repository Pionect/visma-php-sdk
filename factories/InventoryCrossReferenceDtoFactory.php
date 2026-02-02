<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\InventoryCrossReferenceDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class InventoryCrossReferenceDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'alternateType' => $this->faker->word(),
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
