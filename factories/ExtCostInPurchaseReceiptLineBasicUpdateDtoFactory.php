<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ExtCostInPurchaseReceiptLineBasicUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ExtCostInPurchaseReceiptLineBasicUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => null,
        ];
    }

    protected function modelClass(): string
    {
        return ExtCostInPurchaseReceiptLineBasicUpdateDto::class;
    }
}
