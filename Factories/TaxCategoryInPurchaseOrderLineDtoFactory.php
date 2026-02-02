<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\TaxCategoryInPurchaseOrderLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class TaxCategoryInPurchaseOrderLineDtoFactory extends Factory
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
        return TaxCategoryInPurchaseOrderLineDto::class;
    }
}
