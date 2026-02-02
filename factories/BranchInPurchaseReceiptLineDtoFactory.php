<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\BranchInPurchaseReceiptLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class BranchInPurchaseReceiptLineDtoFactory extends Factory
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
        return BranchInPurchaseReceiptLineDto::class;
    }
}
