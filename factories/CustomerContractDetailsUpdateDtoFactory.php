<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CustomerContractDetailsUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomerContractDetailsUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'operation' => $this->faker->word(),
            'contractDetailId' => $this->faker->numberBetween(1, 1000),
            'itemCode' => $this->faker->word(),
            'included' => $this->faker->randomFloat(2, 0, 1000),
            'setupPrice' => $this->faker->randomFloat(2, 0, 1000),
            'recurringPrice' => $this->faker->randomFloat(2, 0, 1000),
            'extraUsagePrice' => $this->faker->randomFloat(2, 0, 1000),
            'renewalPrice' => $this->faker->randomFloat(2, 0, 1000),
        ];
    }

    protected function modelClass(): string
    {
        return CustomerContractDetailsUpdateDto::class;
    }
}
