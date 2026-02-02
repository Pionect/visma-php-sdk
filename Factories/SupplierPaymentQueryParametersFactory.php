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
            'lastModifiedDateTime' => $this->faker->word(),
            'lastModifiedDateTimeCondition' => $this->faker->word(),
            'supplier' => $this->faker->word(),
            'branch' => $this->faker->word(),
            'docDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'docDateCondition' => $this->faker->word(),
            'dueDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'dueDateCondition' => $this->faker->word(),
            'financialPeriod' => $this->faker->word(),
            'balance' => null,
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
