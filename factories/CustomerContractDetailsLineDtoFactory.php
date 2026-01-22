<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomerContractDetailsLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomerContractDetailsLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'contractDetailId' => $this->faker->numberBetween(1, 1000),
            'itemCode' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'included' => $this->faker->randomFloat(2, 0, 1000),
            'difference' => $this->faker->randomFloat(2, 0, 1000),
            'setupPrice' => $this->faker->randomFloat(2, 0, 1000),
            'setupDiscount' => $this->faker->randomFloat(2, 0, 1000),
            'recurringPrice' => $this->faker->randomFloat(2, 0, 1000),
            'extraUsagePrice' => $this->faker->randomFloat(2, 0, 1000),
            'recurringDiscount' => $this->faker->randomFloat(2, 0, 1000),
            'renewalPrice' => $this->faker->randomFloat(2, 0, 1000),
            'renewalDiscount' => $this->faker->randomFloat(2, 0, 1000),
            'invoiceType' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CustomerContractDetailsLineDto::class;
    }
}
