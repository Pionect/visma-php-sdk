<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CurrencyInExtendedOrganizationDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\CurrencyInExtendedOrganizationDto>
 */
class CurrencyInExtendedOrganizationDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'id' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'symbol' => $this->faker->word(),
            'isBaseCurrency' => $this->faker->boolean(),
            'decimalPrecision' => $this->faker->numberBetween(1, 100),
            'isUsedForAccounting' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return CurrencyInExtendedOrganizationDto::class;
    }
}
