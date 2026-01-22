<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\SupplierPaymentQueryParameters;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SupplierPaymentQueryParametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'invoiceRefNbr' => $this->faker->word(),
            'paymentType' => $this->faker->word(),
            'greaterThanValue' => $this->faker->word(),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'lastModifiedDateTimeCondition' => $this->faker->word(),
            'supplier' => $this->faker->word(),
            'branch' => $this->faker->word(),
            'docDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'docDateCondition' => $this->faker->word(),
            'dueDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'dueDateCondition' => $this->faker->word(),
            'financialPeriod' => $this->faker->word(),
            'balance' => $this->faker->randomFloat(2, 0, 1000),
            'balanceCondition' => $this->faker->word(),
            'status' => $this->faker->word(),
            'pageNumber' => $this->faker->numberBetween(1, 100),
            'pageSize' => $this->faker->numberBetween(1, 100),
        ];
    }

    protected function modelClass(): string
    {
        return SupplierPaymentQueryParameters::class;
    }
}
