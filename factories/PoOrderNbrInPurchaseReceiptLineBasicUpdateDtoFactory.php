<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PoOrderNbrInPurchaseReceiptLineBasicUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PoOrderNbrInPurchaseReceiptLineBasicUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return PoOrderNbrInPurchaseReceiptLineBasicUpdateDto::class;
    }
}
