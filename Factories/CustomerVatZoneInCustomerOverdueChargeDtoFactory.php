<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomerVatZoneInCustomerOverdueChargeDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomerVatZoneInCustomerOverdueChargeDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'id' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return CustomerVatZoneInCustomerOverdueChargeDto::class;
    }
}
