<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\SupplierPaymentAdjustmentDto;
use Pionect\VismaSdk\Enums\SupplierInvoiceForSupplierQueryParametersDocumentTypeEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SupplierPaymentAdjustmentDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'branch' => $this->faker->word(),
            'batchNumber' => $this->faker->word(),
            'docType' => $this->faker->randomElement(SupplierInvoiceForSupplierQueryParametersDocumentTypeEnum::cases()),
            'invoiceRefNbr' => $this->faker->word(),
            'amountPaid' => null,
            'cashDiscountTaken' => null,
            'withholdingTax' => null,
            'applicationPeriod' => $this->faker->word(),
            'date' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'dueDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'cashDiscountDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'balance' => null,
            'cashDiscountBalance' => null,
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
