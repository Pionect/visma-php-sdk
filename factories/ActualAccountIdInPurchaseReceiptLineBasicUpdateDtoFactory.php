<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ActualAccountIdInPurchaseReceiptLineBasicUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ActualAccountIdInPurchaseReceiptLineBasicUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return ActualAccountIdInPurchaseReceiptLineBasicUpdateDto::class;
    }
}
