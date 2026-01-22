<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DtoValueOfNullableOfSupplierPaymentTypes;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DtoValueOfNullableOfSupplierPaymentTypesFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DtoValueOfNullableOfSupplierPaymentTypes::class;
    }
}
