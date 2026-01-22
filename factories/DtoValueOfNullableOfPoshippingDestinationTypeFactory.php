<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DtoValueOfNullableOfPoshippingDestinationType;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DtoValueOfNullableOfPoshippingDestinationTypeFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DtoValueOfNullableOfPoshippingDestinationType::class;
    }
}
