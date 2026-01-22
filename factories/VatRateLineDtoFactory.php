<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\VatRateLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class VatRateLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'revisionId' => $this->faker->uuid(),
            'vatRate' => $this->faker->randomFloat(2, 0, 1000),
            'groupType' => $this->faker->word(),
            'startDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
        ];
    }

    protected function modelClass(): string
    {
        return VatRateLineDto::class;
    }
}
