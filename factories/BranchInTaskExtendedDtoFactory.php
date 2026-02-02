<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\BranchInTaskExtendedDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class BranchInTaskExtendedDtoFactory extends Factory
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
        return BranchInTaskExtendedDto::class;
    }
}
