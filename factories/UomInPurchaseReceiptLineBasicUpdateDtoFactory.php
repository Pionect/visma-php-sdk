<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\UomInPurchaseReceiptLineBasicUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class UomInPurchaseReceiptLineBasicUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return UomInPurchaseReceiptLineBasicUpdateDto::class;
    }
}
