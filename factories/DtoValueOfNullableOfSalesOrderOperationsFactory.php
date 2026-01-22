<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DtoValueOfNullableOfSalesOrderOperations;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DtoValueOfNullableOfSalesOrderOperationsFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DtoValueOfNullableOfSalesOrderOperations::class;
    }
}
