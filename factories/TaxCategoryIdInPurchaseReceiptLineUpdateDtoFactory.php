<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\TaxCategoryIdInPurchaseReceiptLineUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class TaxCategoryIdInPurchaseReceiptLineUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return TaxCategoryIdInPurchaseReceiptLineUpdateDto::class;
    }
}
