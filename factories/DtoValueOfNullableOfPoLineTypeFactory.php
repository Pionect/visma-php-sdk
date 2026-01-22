<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DtoValueOfNullableOfPoLineType;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DtoValueOfNullableOfPoLineTypeFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DtoValueOfNullableOfPoLineType::class;
    }
}
