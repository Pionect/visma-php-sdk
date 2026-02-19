<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\StocktakeLineV2dto;
use Pionect\VismaSdk\Enums\StocktakeLineV2dtoStatusEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class StocktakeLineV2dtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'status' => $this->faker->randomElement(StocktakeLineV2dtoStatusEnum::cases()),
            'lineNbr' => $this->faker->numberBetween(1, 100),
            'tagNbr' => $this->faker->numberBetween(1, 100),
            'inventory' => null,
            'location' => null,
            'warehouse' => null,
            'lotSerialNbr' => $this->faker->word(),
            'expirationDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'bookQuantity' => null,
            'physicalQuantity' => null,
            'varianceQuantity' => null,
            'unitCost' => null,
            'extVarianceCost' => null,
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
