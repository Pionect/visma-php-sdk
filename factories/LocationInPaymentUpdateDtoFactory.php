<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\LocationInPaymentUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class LocationInPaymentUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return LocationInPaymentUpdateDto::class;
    }
}
