<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\BranchInNumberingSequenceDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class BranchInNumberingSequenceDtoFactory extends Factory
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
        return BranchInNumberingSequenceDto::class;
    }
}
