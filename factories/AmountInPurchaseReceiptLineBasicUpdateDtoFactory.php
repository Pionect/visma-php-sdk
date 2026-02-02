<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\AmountInPurchaseReceiptLineBasicUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class AmountInPurchaseReceiptLineBasicUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => null,
        ];
    }

    protected function modelClass(): string
    {
        return AmountInPurchaseReceiptLineBasicUpdateDto::class;
    }
}
