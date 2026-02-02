<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\TransferOrderNbrInPurchaseReceiptLineUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class TransferOrderNbrInPurchaseReceiptLineUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return TransferOrderNbrInPurchaseReceiptLineUpdateDto::class;
    }
}
