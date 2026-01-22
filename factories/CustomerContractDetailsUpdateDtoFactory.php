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
            'contractDetailId' => $this->faker->word(),
            'itemCode' => $this->faker->word(),
            'included' => $this->faker->word(),
            'setupPrice' => $this->faker->word(),
            'recurringPrice' => $this->faker->word(),
            'extraUsagePrice' => $this->faker->word(),
            'renewalPrice' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CustomerContractDetailsUpdateDto::class;
    }
}
