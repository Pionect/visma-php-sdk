<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\AttributeDetailDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class AttributeDetailDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'valueId' => $this->faker->uuid(),
            'description' => $this->faker->sentence(),
            'sortOrder' => $this->faker->numberBetween(1, 100),
            'disabled' => $this->faker->boolean(),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return AttributeDetailDto::class;
    }
}
