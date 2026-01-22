<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SalesPersonInCashSaleDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SalesPersonInCashSaleDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return SalesPersonInCashSaleDto::class;
    }
}
