<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\BranchNumberInInventoryTransferDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class BranchNumberInInventoryTransferDtoFactory extends Factory
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
        return BranchNumberInInventoryTransferDto::class;
    }
}
