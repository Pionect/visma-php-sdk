<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\UnitOfMeasureDto;
use Pionect\VismaSdk\Enums\CreateCurrencyRateMultDivEnum;
use Pionect\VismaSdk\Enums\UnitOfMeasureSupplementaryMeasureUnitEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\UnitOfMeasureDto>
 */
class UnitOfMeasureDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'fromUnit' => $this->faker->word(),
            'toUnit' => $this->faker->word(),
            'unitMultDiv' => $this->faker->randomElement(CreateCurrencyRateMultDivEnum::cases()),
            'unitRate' => null,
            'supplementaryMeasureUnit' => $this->faker->randomElement(UnitOfMeasureSupplementaryMeasureUnitEnum::cases()),
        ];
    }

    protected function modelClass(): string
    {
        return UnitOfMeasureDto::class;
    }
}
