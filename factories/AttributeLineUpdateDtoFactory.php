<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\AttributeLineUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class AttributeLineUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'attributeId' => null,
            'attributeValue' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return AttributeLineUpdateDto::class;
    }
}
