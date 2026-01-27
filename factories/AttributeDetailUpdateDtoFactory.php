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
            'valueId' => $this->faker->uuid(),
            'description' => $this->faker->sentence(),
            'sortOrder' => $this->faker->numberBetween(1, 100),
            'disabled' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return AttributeDetailUpdateDto::class;
    }
}
