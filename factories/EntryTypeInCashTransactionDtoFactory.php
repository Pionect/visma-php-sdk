<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\EntryTypeInCashTransactionDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class EntryTypeInCashTransactionDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'id' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return EntryTypeInCashTransactionDto::class;
    }
}
