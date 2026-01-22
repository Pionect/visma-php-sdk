<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DtoValueOfNullableOfPaymentTypes;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DtoValueOfNullableOfPaymentTypesFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DtoValueOfNullableOfPaymentTypes::class;
    }
}
