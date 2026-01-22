<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ActualAccountInPurchaseReceiptLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ActualAccountInPurchaseReceiptLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'number' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return ActualAccountInPurchaseReceiptLineDto::class;
    }
}
