<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DtoValueOfNullableOfInvoiceToType;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DtoValueOfNullableOfInvoiceToTypeFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DtoValueOfNullableOfInvoiceToType::class;
    }
}
