<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\TransactionDetailDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class TransactionDetailDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'lineNumber' => $this->faker->numberBetween(1, 100),
            'branch' => $this->faker->word(),
            'item' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'quantity' => $this->faker->randomFloat(2, 0, 1000),
            'uom' => $this->faker->word(),
            'price' => $this->faker->randomFloat(2, 0, 1000),
            'amount' => $this->faker->randomFloat(2, 0, 1000),
            'offsetCashAccount' => $this->faker->word(),
            'offsetAccount' => $this->faker->word(),
            'offsetSubAccount' => $this->faker->word(),
            'taxCategory' => $this->faker->word(),
            'nonBillable' => $this->faker->boolean(),
            'project' => $this->faker->word(),
            'projectTask' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return TransactionDetailDto::class;
    }
}
