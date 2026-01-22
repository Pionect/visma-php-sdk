<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\LineTypeInPurchaseReceiptLineUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class LineTypeInPurchaseReceiptLineUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return LineTypeInPurchaseReceiptLineUpdateDto::class;
    }
}
