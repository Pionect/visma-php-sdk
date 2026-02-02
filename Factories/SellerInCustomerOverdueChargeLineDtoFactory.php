<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SellerInCustomerOverdueChargeLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SellerInCustomerOverdueChargeLineDtoFactory extends Factory
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
        return SellerInCustomerOverdueChargeLineDto::class;
    }
}
