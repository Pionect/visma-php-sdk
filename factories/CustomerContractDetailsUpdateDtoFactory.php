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
            'included' => null,
            'setupPrice' => null,
            'recurringPrice' => null,
            'extraUsagePrice' => null,
            'renewalPrice' => null,
        ];
    }

    protected function modelClass(): string
    {
        return CustomerContractDetailsUpdateDto::class;
    }
}
