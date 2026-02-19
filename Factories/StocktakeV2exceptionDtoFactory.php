<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\StocktakeV2exceptionDto;
use Pionect\VismaSdk\Enums\StocktakeV2exceptionErrorCodeEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class StocktakeV2exceptionDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'inventoryId' => $this->faker->uuid(),
            'locationId' => $this->faker->uuid(),
            'physicalQuantity' => null,
            'reasonCode' => $this->faker->word(),
            'lotSerialNumber' => $this->faker->word(),
            'expirationDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'message' => $this->faker->word(),
            'errorCode' => $this->faker->randomElement(StocktakeV2exceptionErrorCodeEnum::cases()),
        ];
    }

    protected function modelClass(): string
    {
        return StocktakeV2exceptionDto::class;
    }
}
