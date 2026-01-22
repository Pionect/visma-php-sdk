<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\BranchInContractUsageLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class BranchInContractUsageLineDtoFactory extends Factory
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
        return BranchInContractUsageLineDto::class;
    }
}
