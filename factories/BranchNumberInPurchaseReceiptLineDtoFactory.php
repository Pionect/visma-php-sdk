<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\BranchNumberInPurchaseReceiptLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class BranchNumberInPurchaseReceiptLineDtoFactory extends Factory
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
        return BranchNumberInPurchaseReceiptLineDto::class;
    }
}
