<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\LedgerInBranchDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class LedgerInBranchDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return LedgerInBranchDto::class;
    }
}
