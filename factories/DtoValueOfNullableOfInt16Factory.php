<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DtoValueOfNullableOfInt16;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DtoValueOfNullableOfInt16Factory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->numberBetween(1, 100),
        ];
    }

    protected function modelClass(): string
    {
        return DtoValueOfNullableOfInt16::class;
    }
}
