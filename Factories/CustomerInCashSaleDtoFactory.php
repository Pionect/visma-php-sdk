<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomerInCashSaleDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomerInCashSaleDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'number' => $this->faker->word(),
            'name' => $this->faker->name(),
        ];
    }

    protected function modelClass(): string
    {
        return CustomerInCashSaleDto::class;
    }
}
