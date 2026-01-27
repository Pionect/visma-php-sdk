<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\FixedAssetPropertyTaxDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class FixedAssetPropertyTaxDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'propertyTaxId' => $this->faker->uuid(),
            'description' => $this->faker->sentence(),
            'active' => $this->faker->boolean(),
            'details' => [],
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return FixedAssetPropertyTaxDto::class;
    }
}
