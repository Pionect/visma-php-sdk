<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\LocationInInventoryAdjustmentLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class LocationInInventoryAdjustmentLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'countryId' => $this->faker->uuid(),
            'id' => $this->faker->word(),
            'name' => $this->faker->name(),
        ];
    }

    protected function modelClass(): string
    {
        return LocationInInventoryAdjustmentLineDto::class;
    }
}
