<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\BranchInProjectUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class BranchInProjectUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return BranchInProjectUpdateDto::class;
    }
}
