<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DtoValueOfNullableOfBoolean;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DtoValueOfNullableOfBooleanFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return DtoValueOfNullableOfBoolean::class;
    }
}
