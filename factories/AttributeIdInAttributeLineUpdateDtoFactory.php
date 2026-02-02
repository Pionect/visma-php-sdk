<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\AttributeIdInAttributeLineUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class AttributeIdInAttributeLineUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return AttributeIdInAttributeLineUpdateDto::class;
    }
}
