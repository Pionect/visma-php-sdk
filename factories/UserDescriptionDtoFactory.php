<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\UserDescriptionDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class UserDescriptionDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'id' => $this->faker->word(),
            'name' => $this->faker->name(),
        ];
    }

    protected function modelClass(): string
    {
        return UserDescriptionDto::class;
    }
}
