<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DtoValueOfNullableOfInt32;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DtoValueOfNullableOfInt32Factory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->numberBetween(1, 100),
        ];
    }

    protected function modelClass(): string
    {
        return DtoValueOfNullableOfInt32::class;
    }
}
