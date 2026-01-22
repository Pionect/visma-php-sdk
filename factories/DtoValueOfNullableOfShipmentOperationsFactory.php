<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DtoValueOfNullableOfShipmentOperations;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DtoValueOfNullableOfShipmentOperationsFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DtoValueOfNullableOfShipmentOperations::class;
    }
}
