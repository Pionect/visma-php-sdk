<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ClassAttributeDto;
use Pionect\VismaSdk\Enums\AttributeControlTypeEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\ClassAttributeDto>
 */
class ClassAttributeDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'attributeId' => $this->faker->uuid(),
            'description' => $this->faker->sentence(),
            'sortOrder' => $this->faker->numberBetween(1, 100),
            'required' => $this->faker->boolean(),
            'attributeType' => $this->faker->randomElement(AttributeControlTypeEnum::cases()),
            'defaultValue' => $this->faker->word(),
            'details' => [],
        ];
    }

    protected function modelClass(): string
    {
        return ClassAttributeDto::class;
    }
}
