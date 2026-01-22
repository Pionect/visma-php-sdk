<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DtoValueOfNullableOfPurchaseOrderType;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DtoValueOfNullableOfPurchaseOrderTypeFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DtoValueOfNullableOfPurchaseOrderType::class;
    }
}
