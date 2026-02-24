<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\AttributeDetailUpdateDto;
use Pionect\VismaSdk\Enums\AttributeDetailUpdateOperationEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\AttributeDetailUpdateDto>
 */
class AttributeDetailUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'operation' => $this->faker->randomElement(AttributeDetailUpdateOperationEnum::cases()),
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
