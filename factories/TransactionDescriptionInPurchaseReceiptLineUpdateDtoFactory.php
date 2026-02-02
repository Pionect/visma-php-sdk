<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\TransactionDescriptionInPurchaseReceiptLineUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class TransactionDescriptionInPurchaseReceiptLineUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return TransactionDescriptionInPurchaseReceiptLineUpdateDto::class;
    }
}
