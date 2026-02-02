<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\ExpenseClaimUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ExpenseClaimUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'date' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'description' => $this->faker->sentence(),
            'claimedBy' => $this->faker->word(),
            'customer' => $this->faker->word(),
            'customerUpdateAnswer' => $this->faker->word(),
            'location' => $this->faker->word(),
            'details' => [],
        ];
    }

    protected function modelClass(): string
    {
        return ExpenseClaimUpdateDto::class;
    }
}
