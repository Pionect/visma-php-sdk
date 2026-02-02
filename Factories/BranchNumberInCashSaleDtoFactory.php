<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\BranchNumberInCashSaleDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class BranchNumberInCashSaleDtoFactory extends Factory
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
        return BranchNumberInCashSaleDto::class;
    }
}
