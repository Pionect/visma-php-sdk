<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\AttributeLineUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\AttributeLineUpdateDto>
 */
class AttributeLineUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'attributeId' => $this->faker->uuid(),
            'attributeValue' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return AttributeLineUpdateDto::class;
    }
}
