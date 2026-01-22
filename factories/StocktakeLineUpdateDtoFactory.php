<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\StocktakeLineUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class StocktakeLineUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'operation' => $this->faker->word(),
            'lineNbr' => $this->faker->word(),
            'physicalQuantity' => $this->faker->word(),
            'inventoryId' => $this->faker->word(),
            'locationId' => $this->faker->word(),
            'reasonCode' => $this->faker->word(),
            'lotSerialNumber' => $this->faker->word(),
            'expirationDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
        ];
    }

    protected function modelClass(): string
    {
        return StocktakeLineUpdateDto::class;
    }
}
