<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DtoValueOfNullableOfSalesOrderShipCompleteStatuses;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DtoValueOfNullableOfSalesOrderShipCompleteStatusesFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DtoValueOfNullableOfSalesOrderShipCompleteStatuses::class;
    }
}
