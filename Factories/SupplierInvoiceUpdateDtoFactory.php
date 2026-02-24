<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\SupplierInvoiceUpdateDto;
use Pionect\VismaSdk\Enums\EntryTypeTaxCalculationModeEnum;
use Pionect\VismaSdk\Enums\SupplierInvoiceForSupplierQueryParametersDocumentTypeEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\SupplierInvoiceUpdateDto>
 */
class SupplierInvoiceUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'documentType' => $this->faker->randomElement(SupplierInvoiceForSupplierQueryParametersDocumentTypeEnum::cases()),
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
            'exchangeRate' => null,
            'branchNumber' => $this->faker->word(),
            'roundingDiffInCurrency' => null,
            'taxCalculationMode' => $this->faker->randomElement(EntryTypeTaxCalculationModeEnum::cases()),
            'supplierTaxZone' => $this->faker->word(),
            'cashAccount' => $this->faker->word(),
            'paymentMethod' => $this->faker->word(),
            'payDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'amount' => null,
            'vatAmount' => null,
            'paymentMessage' => $this->faker->word(),
            'applyRetainage' => $this->faker->boolean(),
            'taxDetailLines' => [],
            'invoiceLines' => [],
            'approvalDetails' => ApprovalDetailsUpdateDtoFactory::new()->make(),
            'addPoreceiptLines' => [],
            'addPurchaseOrders' => [],
            'landedCosts' => [],
            'paySelected' => $this->faker->boolean(),
            'overrideNumberSeries' => $this->faker->boolean(),
            'validateLineDetails' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return SupplierInvoiceUpdateDto::class;
    }
}
