<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\BranchNumberInCashSaleLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class BranchNumberInCashSaleLineDtoFactory extends Factory
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
        return BranchNumberInCashSaleLineDto::class;
    }
}
