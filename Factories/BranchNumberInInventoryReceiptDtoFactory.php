<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\BranchNumberInInventoryReceiptDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class BranchNumberInInventoryReceiptDtoFactory extends Factory
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
        return BranchNumberInInventoryReceiptDto::class;
    }
}
