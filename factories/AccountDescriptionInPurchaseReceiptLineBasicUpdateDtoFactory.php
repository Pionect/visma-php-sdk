<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\AccountDescriptionInPurchaseReceiptLineBasicUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class AccountDescriptionInPurchaseReceiptLineBasicUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return AccountDescriptionInPurchaseReceiptLineBasicUpdateDto::class;
    }
}
