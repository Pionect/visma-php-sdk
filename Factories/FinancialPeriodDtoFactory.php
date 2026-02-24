<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\FinancialPeriodDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\FinancialPeriodDto>
 */
class FinancialPeriodDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'year' => $this->faker->numberBetween(1, 100),
            'period' => $this->faker->word(),
            'startDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'endDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'description' => $this->faker->sentence(),
            'active' => $this->faker->boolean(),
            'closedInSupplierLedger' => $this->faker->boolean(),
            'closedInCustomerLedger' => $this->faker->boolean(),
            'closedInInventoryManagement' => $this->faker->boolean(),
            'closedInGeneralLedger' => $this->faker->boolean(),
            'closedInCashManagement' => $this->faker->boolean(),
            'closedInFixedAssets' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return FinancialPeriodDto::class;
    }
}
