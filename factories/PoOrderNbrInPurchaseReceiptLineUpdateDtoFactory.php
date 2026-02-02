<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PoOrderNbrInPurchaseReceiptLineUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PoOrderNbrInPurchaseReceiptLineUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return PoOrderNbrInPurchaseReceiptLineUpdateDto::class;
    }
}
