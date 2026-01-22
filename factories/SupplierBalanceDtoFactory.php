<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\SupplierBalanceDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SupplierBalanceDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'branchNumber' => $this->faker->word(),
            'supplier' => $this->faker->word(),
            'balance' => $this->faker->randomFloat(2, 0, 1000),
            'unreleasedPurchasesNotInApproval' => $this->faker->word(),
            'totalSentForApproval' => $this->faker->word(),
            'totalPurchaseInvoicePeriod' => $this->faker->word(),
            'totalPurchaseInvoiceYear' => $this->faker->word(),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
        ];
    }

    protected function modelClass(): string
    {
        return SupplierBalanceDto::class;
    }
}
