<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ActualAccountIdInPurchaseReceiptLineUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ActualAccountIdInPurchaseReceiptLineUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return ActualAccountIdInPurchaseReceiptLineUpdateDto::class;
    }
}
