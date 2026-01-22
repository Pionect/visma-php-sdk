<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\StocktakeLineV2dto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class StocktakeLineV2dtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'status' => $this->faker->word(),
            'lineNbr' => $this->faker->numberBetween(1, 100),
            'tagNbr' => $this->faker->numberBetween(1, 100),
            'inventory' => $this->faker->word(),
            'location' => $this->faker->word(),
            'warehouse' => $this->faker->word(),
            'lotSerialNbr' => $this->faker->word(),
            'expirationDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'bookQuantity' => $this->faker->randomFloat(2, 0, 1000),
            'physicalQuantity' => $this->faker->randomFloat(2, 0, 1000),
            'varianceQuantity' => $this->faker->randomFloat(2, 0, 1000),
            'unitCost' => $this->faker->randomFloat(2, 0, 1000),
            'extVarianceCost' => $this->faker->randomFloat(2, 0, 1000),
            'reasonCode' => $this->faker->word(),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'baseUnit' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return StocktakeLineV2dto::class;
    }
}
