<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\BranchNumberInInventoryAdjustmentDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class BranchNumberInInventoryAdjustmentDtoFactory extends Factory
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
        return BranchNumberInInventoryAdjustmentDto::class;
    }
}
