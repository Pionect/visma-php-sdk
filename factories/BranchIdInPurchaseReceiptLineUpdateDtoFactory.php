<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\BranchIdInPurchaseReceiptLineUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class BranchIdInPurchaseReceiptLineUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return BranchIdInPurchaseReceiptLineUpdateDto::class;
    }
}
