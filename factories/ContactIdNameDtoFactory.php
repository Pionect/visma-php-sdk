<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ContactIdNameDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ContactIdNameDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'id' => $this->faker->numberBetween(1, 100),
            'name' => $this->faker->name(),
        ];
    }

    protected function modelClass(): string
    {
        return ContactIdNameDto::class;
    }
}
