<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\VatInformationScheduleDto;
use Pionect\VismaSdk\Enums\VatRateLineGroupTypeEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class VatInformationScheduleDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'startDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'vatRate' => null,
            'minTaxableAmt' => null,
            'maxTaxableAmt' => null,
            'reportingGroup' => $this->faker->word(),
            'deductibleVatRate' => null,
            'groupType' => $this->faker->randomElement(VatRateLineGroupTypeEnum::cases()),
        ];
    }

    protected function modelClass(): string
    {
        return VatInformationScheduleDto::class;
    }
}
