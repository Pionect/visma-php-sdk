<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DtoValueOfNullableOfInventoryTransactionType;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DtoValueOfNullableOfInventoryTransactionTypeFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DtoValueOfNullableOfInventoryTransactionType::class;
    }
}
