<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DtoValueOfNullableOfDecimal;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DtoValueOfNullableOfDecimalFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->randomFloat(2, 0, 1000),
        ];
    }

    protected function modelClass(): string
    {
        return DtoValueOfNullableOfDecimal::class;
    }
}
