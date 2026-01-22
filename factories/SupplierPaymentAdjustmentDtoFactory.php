<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\SupplierPaymentAdjustmentDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SupplierPaymentAdjustmentDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'branch' => $this->faker->word(),
            'batchNumber' => $this->faker->word(),
            'docType' => $this->faker->word(),
            'invoiceRefNbr' => $this->faker->word(),
            'amountPaid' => $this->faker->randomFloat(2, 0, 1000),
            'cashDiscountTaken' => $this->faker->randomFloat(2, 0, 1000),
            'withholdingTax' => $this->faker->randomFloat(2, 0, 1000),
            'applicationPeriod' => $this->faker->word(),
            'date' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'dueDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'cashDiscountDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'balance' => $this->faker->randomFloat(2, 0, 1000),
            'cashDiscountBalance' => $this->faker->randomFloat(2, 0, 1000),
            'description' => $this->faker->sentence(),
            'currency' => $this->faker->word(),
            'postPeriod' => $this->faker->word(),
            'supplierRef' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return SupplierPaymentAdjustmentDto::class;
    }
}
