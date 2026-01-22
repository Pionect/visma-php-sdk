<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DtoValueOfNullableOfSupplierInvoiceTypes;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DtoValueOfNullableOfSupplierInvoiceTypesFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DtoValueOfNullableOfSupplierInvoiceTypes::class;
    }
}
