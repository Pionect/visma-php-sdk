<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\LocationInCustomerOverdueChargeDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class LocationInCustomerOverdueChargeDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'countryId' => $this->faker->uuid(),
            'name' => $this->faker->name(),
        ];
    }

    protected function modelClass(): string
    {
        return LocationInCustomerOverdueChargeDto::class;
    }
}
