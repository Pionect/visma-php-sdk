<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SalesPersonIdinCashSaleUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SalesPersonIdinCashSaleUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->numberBetween(1, 100),
        ];
    }

    protected function modelClass(): string
    {
        return SalesPersonIdinCashSaleUpdateDto::class;
    }
}
