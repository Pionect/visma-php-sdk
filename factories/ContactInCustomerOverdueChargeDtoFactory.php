<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ContactInCustomerOverdueChargeDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ContactInCustomerOverdueChargeDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'name' => $this->faker->name(),
        ];
    }

    protected function modelClass(): string
    {
        return ContactInCustomerOverdueChargeDto::class;
    }
}
