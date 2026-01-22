<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\CustomerContractDetailsDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CustomerContractDetailsDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'effectiveFrom' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'promoCode' => $this->faker->word(),
            'pendingSetup' => $this->faker->randomFloat(2, 0, 1000),
            'pendingRecurring' => $this->faker->randomFloat(2, 0, 1000),
            'pendingRenewal' => $this->faker->randomFloat(2, 0, 1000),
            'totalPending' => $this->faker->randomFloat(2, 0, 1000),
            'currentSetup' => $this->faker->randomFloat(2, 0, 1000),
            'currentRecurring' => $this->faker->randomFloat(2, 0, 1000),
            'currentRenewal' => $this->faker->randomFloat(2, 0, 1000),
            'lines' => [],
        ];
    }

    protected function modelClass(): string
    {
        return CustomerContractDetailsDto::class;
    }
}
