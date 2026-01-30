<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ReceiptQtyInPurchaseReceiptLineBasicUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ReceiptQtyInPurchaseReceiptLineBasicUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => null,
        ];
    }

    protected function modelClass(): string
    {
        return ReceiptQtyInPurchaseReceiptLineBasicUpdateDto::class;
    }
}
