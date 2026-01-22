<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DtoValueOfNullableOfGuid;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DtoValueOfNullableOfGuidFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DtoValueOfNullableOfGuid::class;
    }
}
