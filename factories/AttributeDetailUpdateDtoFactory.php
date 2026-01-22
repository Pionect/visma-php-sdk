<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\AttributeDetailUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class AttributeDetailUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'operation' => $this->faker->word(),
            'valueId' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'sortOrder' => $this->faker->word(),
            'disabled' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return AttributeDetailUpdateDto::class;
    }
}
