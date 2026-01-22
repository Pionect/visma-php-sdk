<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DtoValueOfNullableOfSalesOrderTypes;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DtoValueOfNullableOfSalesOrderTypesFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DtoValueOfNullableOfSalesOrderTypes::class;
    }
}
