<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\BranchInTaskDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class BranchInTaskDtoFactory extends Factory
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
        return BranchInTaskDto::class;
    }
}
