<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\FixedAssetPropertyTaxDetailsDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\FixedAssetPropertyTaxDetailsDto>
 */
class FixedAssetPropertyTaxDetailsDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'date' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'propertyValue' => null,
            'minPercent' => null,
        ];
    }

    protected function modelClass(): string
    {
        return FixedAssetPropertyTaxDetailsDto::class;
    }
}
