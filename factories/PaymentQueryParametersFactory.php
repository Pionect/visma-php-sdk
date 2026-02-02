<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\PaymentQueryParameters;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PaymentQueryParametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'paymentNbr' => $this->faker->word(),
            'paymentType' => $this->faker->word(),
            'customer' => $this->faker->word(),
            'greaterThanValue' => $this->faker->word(),
            'invoiceRefNbr' => $this->faker->word(),
            'status' => $this->faker->word(),
            'numberToRead' => $this->faker->numberBetween(1, 100),
            'skipRecords' => $this->faker->numberBetween(1, 100),
            'orderBy' => $this->faker->word(),
            'lastModifiedDateTime' => $this->faker->word(),
            'lastModifiedDateTimeCondition' => $this->faker->word(),
            'branch' => $this->faker->word(),
            'docDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'docDateCondition' => $this->faker->word(),
            'financialPeriod' => $this->faker->word(),
            'pageNumber' => $this->faker->numberBetween(1, 100),
            'pageSize' => $this->faker->numberBetween(1, 100),
        ];
    }

    protected function modelClass(): string
    {
        return PaymentQueryParameters::class;
    }
}
