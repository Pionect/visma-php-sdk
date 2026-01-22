<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\UomInPurchaseReceiptLineUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class UomInPurchaseReceiptLineUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return UomInPurchaseReceiptLineUpdateDto::class;
    }
}
