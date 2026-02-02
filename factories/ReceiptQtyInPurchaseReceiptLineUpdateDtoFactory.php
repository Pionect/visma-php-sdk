<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ReceiptQtyInPurchaseReceiptLineUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ReceiptQtyInPurchaseReceiptLineUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => null,
        ];
    }

    protected function modelClass(): string
    {
        return ReceiptQtyInPurchaseReceiptLineUpdateDto::class;
    }
}
