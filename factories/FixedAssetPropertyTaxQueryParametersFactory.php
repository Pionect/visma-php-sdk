<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\FixedAssetPropertyTaxQueryParameters;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class FixedAssetPropertyTaxQueryParametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'propertyTaxId' => $this->faker->uuid(),
            'active' => $this->faker->boolean(),
            'pageNumber' => $this->faker->numberBetween(1, 100),
            'pageSize' => $this->faker->numberBetween(1, 100),
        ];
    }

    protected function modelClass(): string
    {
        return FixedAssetPropertyTaxQueryParameters::class;
    }
}
