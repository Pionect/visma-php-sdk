<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ConsolBranchInLedgerDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ConsolBranchInLedgerDtoFactory extends Factory
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
        return ConsolBranchInLedgerDto::class;
    }
}
