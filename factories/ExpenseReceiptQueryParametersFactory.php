<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\ExpenseReceiptQueryParameters;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ExpenseReceiptQueryParametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'date' => $this->faker->word(),
            'dateCondition' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'inventory' => $this->faker->word(),
            'project' => $this->faker->word(),
            'claimedBy' => $this->faker->word(),
            'projectTask' => $this->faker->word(),
            'invoiceable' => $this->faker->boolean(),
            'status' => $this->faker->word(),
            'customer' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return ExpenseReceiptQueryParameters::class;
    }
}
