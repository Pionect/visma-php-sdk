<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PropertyTaxInFixedAssetDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\PropertyTaxInFixedAssetDto>
 */
class PropertyTaxInFixedAssetDtoFactory extends Factory
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
        return PropertyTaxInFixedAssetDto::class;
    }
}
