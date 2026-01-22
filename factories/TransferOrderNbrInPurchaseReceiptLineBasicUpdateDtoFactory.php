<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\TransferOrderNbrInPurchaseReceiptLineBasicUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class TransferOrderNbrInPurchaseReceiptLineBasicUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return TransferOrderNbrInPurchaseReceiptLineBasicUpdateDto::class;
    }
}
