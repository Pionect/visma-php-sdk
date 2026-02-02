<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\TransferOrderTypeInPurchaseReceiptLineUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class TransferOrderTypeInPurchaseReceiptLineUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return TransferOrderTypeInPurchaseReceiptLineUpdateDto::class;
    }
}
