<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\OffsetAccountBranchInEntryTypeDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class OffsetAccountBranchInEntryTypeDtoFactory extends Factory
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
        return OffsetAccountBranchInEntryTypeDto::class;
    }
}
