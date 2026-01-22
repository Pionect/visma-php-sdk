<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\VatZoneQueryParameters;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class VatZoneQueryParametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'pageNumber' => $this->faker->numberBetween(1, 100),
            'pageSize' => $this->faker->numberBetween(1, 100),
        ];
    }

    protected function modelClass(): string
    {
        return VatZoneQueryParameters::class;
    }
}
