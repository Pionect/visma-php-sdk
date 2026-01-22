<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\BranchInGeneralLedgerTransactionDetailsDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class BranchInGeneralLedgerTransactionDetailsDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'number' => $this->faker->word(),
            'name' => $this->faker->name(),
        ];
    }

    protected function modelClass(): string
    {
        return BranchInGeneralLedgerTransactionDetailsDto::class;
    }
}
