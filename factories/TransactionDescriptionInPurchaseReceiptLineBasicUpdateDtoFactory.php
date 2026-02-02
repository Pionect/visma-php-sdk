<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\TransactionDescriptionInPurchaseReceiptLineBasicUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class TransactionDescriptionInPurchaseReceiptLineBasicUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return TransactionDescriptionInPurchaseReceiptLineBasicUpdateDto::class;
    }
}
