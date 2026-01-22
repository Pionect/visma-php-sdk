<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CompletePoLineInPurchaseReceiptLineUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CompletePoLineInPurchaseReceiptLineUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return CompletePoLineInPurchaseReceiptLineUpdateDto::class;
    }
}
