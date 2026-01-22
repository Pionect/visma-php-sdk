<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\AttributeIdValueDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class AttributeIdValueDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return AttributeIdValueDto::class;
    }
}
