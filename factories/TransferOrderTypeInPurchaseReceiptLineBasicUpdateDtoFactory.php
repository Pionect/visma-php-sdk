<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\TransferOrderTypeInPurchaseReceiptLineBasicUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class TransferOrderTypeInPurchaseReceiptLineBasicUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return TransferOrderTypeInPurchaseReceiptLineBasicUpdateDto::class;
    }
}
