<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\FinancialsDetailDto;
use Pionect\VismaSdk\Enums\EntryTypeTaxCalculationModeEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class FinancialsDetailDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'batchNumber' => $this->faker->word(),
            'branch' => null,
            'cleared' => $this->faker->boolean(),
            'clearDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'taxZone' => null,
            'taxCalcMode' => $this->faker->randomElement(EntryTypeTaxCalculationModeEnum::cases()),
        ];
    }

    protected function modelClass(): string
    {
        return FinancialsDetailDto::class;
    }
}
