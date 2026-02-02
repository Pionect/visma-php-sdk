<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\FixedAssetClassQueryParameters;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class FixedAssetClassQueryParametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'classId' => $this->faker->uuid(),
            'pageNumber' => $this->faker->numberBetween(1, 100),
            'pageSize' => $this->faker->numberBetween(1, 100),
        ];
    }

    protected function modelClass(): string
    {
        return FixedAssetClassQueryParameters::class;
    }
}
