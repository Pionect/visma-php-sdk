<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\CustomerInvoiceDto;
use Pionect\VismaSdk\Enums\CashSaleDocumentTypeEnum;
use Pionect\VismaSdk\Enums\CashSaleStatusEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\CustomerInvoiceDto>
 */
class CustomerInvoiceDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'creditTerms' => null,
            'documentDueDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'cashDiscountDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'externalReference' => $this->faker->word(),
            'isRotRutDeductible' => $this->faker->boolean(),
            'exchangeRate' => null,
            'dunningLetterDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'dunningLetterLevel' => $this->faker->numberBetween(1, 100),
            'contact' => null,
            'attachments' => [],
            'taxDetails' => [],
            'invoiceLines' => [],
            'sendToAutoInvoice' => $this->faker->boolean(),
            'roundingDiff' => null,
            'customerVatZone' => null,
            'startDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'endDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'accountingCostRef' => $this->faker->word(),
            'originatorDocRef' => $this->faker->word(),
            'contractDocRef' => $this->faker->word(),
            'childRecord' => ChildRecordDtoFactory::new()->make(),
            'directDebitMandate' => DirectDebitMandateDtoFactory::new()->make(),
            'excludeDebtCollection' => $this->faker->boolean(),
            'debtCollection' => null,
            'timeStamp' => $this->faker->word(),
            'hold' => $this->faker->boolean(),
            'discountTotal' => null,
            'discountTotalInCurrency' => null,
            'detailTotal' => null,
            'detailTotalInCurrency' => null,
            'vatTaxableTotal' => null,
            'vatTaxableTotalInCurrency' => null,
            'vatExemptTotal' => null,
            'vatExemptTotalInCurrency' => null,
            'salesPersonId' => $this->faker->numberBetween(1, 1000),
            'salesPersonDescr' => $this->faker->word(),
            'salesPerson' => null,
            'paymentReference' => $this->faker->word(),
            'invoiceAddress' => null,
            'invoiceContact' => null,
            'applications' => [],
            'dontPrint' => $this->faker->boolean(),
            'dontEmail' => $this->faker->boolean(),
            'revoked' => $this->faker->boolean(),
            'customer' => null,
            'documentType' => $this->faker->randomElement(CashSaleDocumentTypeEnum::cases()),
            'referenceNumber' => $this->faker->word(),
            'postPeriod' => $this->faker->word(),
            'financialPeriod' => $this->faker->word(),
            'closedFinancialPeriod' => $this->faker->word(),
            'documentDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'origInvoiceDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'status' => $this->faker->randomElement(CashSaleStatusEnum::cases()),
            'currencyId' => $this->faker->uuid(),
            'amount' => null,
            'amountInCurrency' => null,
            'balance' => null,
            'balanceInCurrency' => null,
            'cashDiscount' => null,
            'cashDiscountInCurrency' => null,
            'paymentMethod' => null,
            'customerRefNumber' => $this->faker->word(),
            'invoiceText' => $this->faker->word(),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'createdDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'note' => $this->faker->word(),
            'vatTotal' => null,
            'vatTotalInCurrency' => null,
            'location' => null,
            'branchNumber' => $this->faker->word(),
            'cashAccount' => $this->faker->word(),
            'project' => null,
            'account' => null,
            'subaccount' => null,
            'customerProject' => $this->faker->word(),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CustomerInvoiceDto::class;
    }
}
