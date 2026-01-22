<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DtoValueOfNullableOfRutRotTypes;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DtoValueOfNullableOfRutRotTypesFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DtoValueOfNullableOfRutRotTypes::class;
    }
}
