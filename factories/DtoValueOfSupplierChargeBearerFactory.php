<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DtoValueOfSupplierChargeBearer;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DtoValueOfSupplierChargeBearerFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DtoValueOfSupplierChargeBearer::class;
    }
}
