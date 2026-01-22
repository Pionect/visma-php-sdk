<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DtoValueOfPurchaseReceiptType;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DtoValueOfPurchaseReceiptTypeFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DtoValueOfPurchaseReceiptType::class;
    }
}
