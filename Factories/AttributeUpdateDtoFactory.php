<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\AttributeUpdateDto;
use Pionect\VismaSdk\Enums\AttributeControlTypeEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\AttributeUpdateDto>
 */
class AttributeUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'attributeId' => $this->faker->uuid(),
            'description' => $this->faker->sentence(),
            'internal' => $this->faker->boolean(),
            'controlType' => $this->faker->randomElement(AttributeControlTypeEnum::cases()),
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
