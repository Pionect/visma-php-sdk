<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PoOrderTypeInPurchaseReceiptLineBasicUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PoOrderTypeInPurchaseReceiptLineBasicUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return PoOrderTypeInPurchaseReceiptLineBasicUpdateDto::class;
    }
}
