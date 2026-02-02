<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PurchaseReceiptOrderListUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PurchaseReceiptOrderListUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'purchaseOrders' => [],
        ];
    }

    protected function modelClass(): string
    {
        return PurchaseReceiptOrderListUpdateDto::class;
    }
}
