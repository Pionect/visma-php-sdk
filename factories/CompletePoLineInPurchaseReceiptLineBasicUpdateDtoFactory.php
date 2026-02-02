<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CompletePoLineInPurchaseReceiptLineBasicUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CompletePoLineInPurchaseReceiptLineBasicUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return CompletePoLineInPurchaseReceiptLineBasicUpdateDto::class;
    }
}
