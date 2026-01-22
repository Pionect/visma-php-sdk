<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PropertyTaxDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PropertyTaxDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'propertyTaxId' => $this->faker->uuid(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return PropertyTaxDto::class;
    }
}
