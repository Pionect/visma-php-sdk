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
            'hold' => $this->faker->boolean(),
            'date' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'origInvoiceDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'postPeriod' => $this->faker->word(),
            'financialPeriod' => $this->faker->word(),
            'supplierReference' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'supplierNumber' => $this->faker->word(),
            'locationId' => $this->faker->uuid(),
            'currencyId' => $this->faker->uuid(),
            'paymentRefNo' => $this->faker->word(),
            'creditTermsId' => $this->faker->uuid(),
            'dueDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'cashDiscountDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'note' => $this->faker->word(),
            'exchangeRate' => $this->faker->randomFloat(2, 0, 1000),
            'branchNumber' => $this->faker->word(),
            'roundingDiffInCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'taxCalculationMode' => $this->faker->word(),
            'supplierTaxZone' => $this->faker->word(),
            'cashAccount' => $this->faker->word(),
            'paymentMethod' => $this->faker->word(),
            'payDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'amount' => $this->faker->randomFloat(2, 0, 1000),
            'vatAmount' => $this->faker->randomFloat(2, 0, 1000),
            'paymentMessage' => $this->faker->word(),
            'applyRetainage' => $this->faker->boolean(),
            'taxDetailLines' => [],
            'invoiceLines' => [],
            'approvalDetails' => $this->faker->word(),
            'addPoreceiptLines' => [],
            'addPurchaseOrders' => [],
            'landedCosts' => [],
            'paySelected' => $this->faker->word(),
            'overrideNumberSeries' => $this->faker->boolean(),
            'validateLineDetails' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return SupplierInvoiceUpdateDto::class;
    }
}
