<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\VatCodeInCashSaleLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class VatCodeInCashSaleLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return VatCodeInCashSaleLineDto::class;
    }
}
