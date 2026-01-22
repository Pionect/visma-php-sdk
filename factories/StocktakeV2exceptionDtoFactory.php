<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\StocktakeV2exceptionDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class StocktakeV2exceptionDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'inventoryId' => $this->faker->uuid(),
            'locationId' => $this->faker->uuid(),
            'physicalQuantity' => $this->faker->randomFloat(2, 0, 1000),
            'reasonCode' => $this->faker->word(),
            'lotSerialNumber' => $this->faker->word(),
            'expirationDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'message' => $this->faker->word(),
            'errorCode' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return StocktakeV2exceptionDto::class;
    }
}
