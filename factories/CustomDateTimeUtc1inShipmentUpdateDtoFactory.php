<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\CustomDateTimeUtc1inShipmentUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomDateTimeUtc1inShipmentUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
        ];
    }

    protected function modelClass(): string
    {
        return CustomDateTimeUtc1inShipmentUpdateDto::class;
    }
}
