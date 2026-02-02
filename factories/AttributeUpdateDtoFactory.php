<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\AttributeUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class AttributeUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'attributeId' => $this->faker->uuid(),
            'description' => $this->faker->sentence(),
            'internal' => $this->faker->boolean(),
            'controlType' => $this->faker->word(),
            'entryMask' => $this->faker->word(),
            'regExp' => $this->faker->word(),
            'details' => [],
        ];
    }

    protected function modelClass(): string
    {
        return AttributeUpdateDto::class;
    }
}
