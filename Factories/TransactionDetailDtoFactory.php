<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\TransactionDetailDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\TransactionDetailDto>
 */
class TransactionDetailDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'lineNumber' => $this->faker->numberBetween(1, 100),
            'branch' => null,
            'item' => null,
            'description' => $this->faker->sentence(),
            'quantity' => null,
            'uom' => $this->faker->word(),
            'price' => null,
            'amount' => null,
            'offsetCashAccount' => null,
            'offsetAccount' => null,
            'offsetSubAccount' => null,
            'taxCategory' => null,
            'nonBillable' => $this->faker->boolean(),
            'project' => null,
            'projectTask' => null,
        ];
    }

    protected function modelClass(): string
    {
        return TransactionDetailDto::class;
    }
}
