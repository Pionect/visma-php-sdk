<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SellerInCashSaleLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SellerInCashSaleLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return SellerInCashSaleLineDto::class;
    }
}
