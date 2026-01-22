<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DiscountBranchDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DiscountBranchDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'branch' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DiscountBranchDto::class;
    }
}
