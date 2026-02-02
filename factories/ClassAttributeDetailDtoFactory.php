<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ClassAttributeDetailDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ClassAttributeDetailDtoFactory extends Factory
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
        return ClassAttributeDetailDto::class;
    }
}
