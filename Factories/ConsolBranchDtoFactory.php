<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ConsolBranchDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ConsolBranchDtoFactory extends Factory
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
        return ConsolBranchDto::class;
    }
}
