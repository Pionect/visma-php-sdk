<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\InventoryCrossReferenceUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class InventoryCrossReferenceUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'alternateType' => $this->faker->word(),
            'bAccount' => $this->faker->word(),
            'alternateId' => $this->faker->uuid(),
            'description' => $this->faker->sentence(),
            'uom' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return InventoryCrossReferenceUpdateDto::class;
    }
}
