<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\OwnerInCashTransactionDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class OwnerInCashTransactionDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'internalId' => $this->faker->uuid(),
            'number' => $this->faker->word(),
            'name' => $this->faker->name(),
        ];
    }

    protected function modelClass(): string
    {
        return OwnerInCashTransactionDto::class;
    }
}
