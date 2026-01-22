<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DtoValueOfNullableOfSupplierDocumentType;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DtoValueOfNullableOfSupplierDocumentTypeFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DtoValueOfNullableOfSupplierDocumentType::class;
    }
}
