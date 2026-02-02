<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\BranchNumberInPurchaseReceiptDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class BranchNumberInPurchaseReceiptDtoFactory extends Factory
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
        return BranchNumberInPurchaseReceiptDto::class;
    }
}
