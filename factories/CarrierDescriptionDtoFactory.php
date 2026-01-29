<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CarrierDescriptionDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CarrierDescriptionDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'id' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return CarrierDescriptionDto::class;
    }
}
