<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\AddOrderLinesToPurchaseReceiptActionResultDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class AddOrderLinesToPurchaseReceiptActionResultDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'actionId' => $this->faker->uuid(),
            'actionResult' => $this->faker->word(),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return AddOrderLinesToPurchaseReceiptActionResultDto::class;
    }
}
