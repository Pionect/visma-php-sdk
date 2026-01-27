<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\ExpenseClaimDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ExpenseClaimDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'refNbr' => $this->faker->word(),
            'status' => $this->faker->word(),
            'approvalStatus' => $this->faker->word(),
            'date' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'description' => $this->faker->sentence(),
            'claimedBy' => $this->faker->word(),
            'claimTotal' => $this->faker->randomFloat(2, 0, 1000),
            'vatTaxableTotal' => $this->faker->randomFloat(2, 0, 1000),
            'vatExemptTotal' => $this->faker->randomFloat(2, 0, 1000),
            'customer' => $this->faker->word(),
            'currency' => $this->faker->word(),
            'approvalDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'department' => $this->faker->word(),
            'location' => $this->faker->word(),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'details' => [],
            'approvalStatusText' => $this->faker->word(),
            'timeStamp' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return ExpenseClaimDto::class;
    }
}
