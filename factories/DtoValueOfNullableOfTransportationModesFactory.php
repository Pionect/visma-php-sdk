<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DtoValueOfNullableOfTransportationModes;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DtoValueOfNullableOfTransportationModesFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DtoValueOfNullableOfTransportationModes::class;
    }
}
