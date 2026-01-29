<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\LedgerInGeneralLedgerTransactionDetailsDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class LedgerInGeneralLedgerTransactionDetailsDtoFactory extends Factory
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
        return LedgerInGeneralLedgerTransactionDetailsDto::class;
    }
}
