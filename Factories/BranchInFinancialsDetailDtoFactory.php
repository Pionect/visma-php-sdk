<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\BranchInFinancialsDetailDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class BranchInFinancialsDetailDtoFactory extends Factory
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
        return BranchInFinancialsDetailDto::class;
    }
}
