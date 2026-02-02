<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DefaultOffsetAccountBranchInEntryTypeDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DefaultOffsetAccountBranchInEntryTypeDtoFactory extends Factory
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
        return DefaultOffsetAccountBranchInEntryTypeDto::class;
    }
}
