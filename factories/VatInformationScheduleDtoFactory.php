<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\VatInformationScheduleDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class VatInformationScheduleDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'startDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'vatRate' => $this->faker->randomFloat(2, 0, 1000),
            'minTaxableAmt' => $this->faker->randomFloat(2, 0, 1000),
            'maxTaxableAmt' => $this->faker->randomFloat(2, 0, 1000),
            'reportingGroup' => $this->faker->word(),
            'deductibleVatRate' => $this->faker->randomFloat(2, 0, 1000),
            'groupType' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return VatInformationScheduleDto::class;
    }
}
