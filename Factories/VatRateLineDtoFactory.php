<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\VatRateLineDto;
use Pionect\VismaSdk\Enums\VatRateLineGroupTypeEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class VatRateLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'revisionId' => $this->faker->uuid(),
            'vatRate' => null,
            'groupType' => $this->faker->randomElement(VatRateLineGroupTypeEnum::cases()),
            'startDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
        ];
    }

    protected function modelClass(): string
    {
        return VatRateLineDto::class;
    }
}
