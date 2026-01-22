<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\SupplierInvoiceUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SupplierInvoiceUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'documentType' => $this->faker->word(),
            'referenceNumber' => $this->faker->word(),
            'hold' => $this->faker->word(),
            'date' => $this->faker->word(),
            'origInvoiceDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'postPeriod' => $this->faker->word(),
            'financialPeriod' => $this->faker->word(),
            'supplierReference' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'supplierNumber' => $this->faker->word(),
            'locationId' => $this->faker->word(),
            'currencyId' => $this->faker->word(),
            'paymentRefNo' => $this->faker->word(),
            'creditTermsId' => $this->faker->word(),
            'dueDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'cashDiscountDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'note' => $this->faker->word(),
            'exchangeRate' => $this->faker->word(),
            'branchNumber' => $this->faker->word(),
            'roundingDiffInCurrency' => $this->faker->word(),
            'taxCalculationMode' => $this->faker->word(),
            'supplierTaxZone' => $this->faker->word(),
            'cashAccount' => $this->faker->word(),
            'paymentMethod' => $this->faker->word(),
            'payDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'amount' => $this->faker->word(),
            'vatAmount' => $this->faker->word(),
            'paymentMessage' => $this->faker->word(),
            'applyRetainage' => $this->faker->word(),
            'taxDetailLines' => [],
            'invoiceLines' => [],
            'approvalDetails' => $this->faker->word(),
            'addPoreceiptLines' => [],
            'addPurchaseOrders' => [],
            'landedCosts' => [],
            'paySelected' => $this->faker->word(),
            'overrideNumberSeries' => $this->faker->word(),
            'validateLineDetails' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return SupplierInvoiceUpdateDto::class;
    }
}
