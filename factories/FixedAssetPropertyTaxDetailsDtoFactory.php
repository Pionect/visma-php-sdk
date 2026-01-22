<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\FixedAssetPropertyTaxDetailsDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class FixedAssetPropertyTaxDetailsDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'date' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'propertyValue' => $this->faker->randomFloat(2, 0, 1000),
            'minPercent' => $this->faker->randomFloat(2, 0, 1000),
        ];
    }

    protected function modelClass(): string
    {
        return FixedAssetPropertyTaxDetailsDto::class;
    }
}
