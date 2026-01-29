<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ClassDescriptionDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ClassDescriptionDtoFactory extends Factory
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
        return ClassDescriptionDto::class;
    }
}
