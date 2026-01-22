<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CreatePurchaseReceiptActionDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CreatePurchaseReceiptActionDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'orderType' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CreatePurchaseReceiptActionDto::class;
    }
}
