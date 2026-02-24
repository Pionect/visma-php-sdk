<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\CashTranTaxDetailTaxTypeEnum;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\CashTranTaxDetailDtoFactory testFactory()
 */
class CashTranTaxDetailDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\CashTranTaxDetailDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?TaxInCashTranTaxDetailDto $tax = null,
        /** VAT rate > The rate of the VAT. */
        public int|float|null $taxRate = null,
        /** Taxable amount > The taxable amount of the transaction. */
        public int|float|null $taxableAmount = null,
        /** VAT amount > The VAT amount calculated for the transaction. */
        public int|float|null $taxAmount = null,
        /**
         * Deductible VAT rate > The percent of deduction that applies to the VAT amount
         * paid to the supplier for specific purchases.
         */
        public int|float|null $deductibleTaxRate = null,
        /**
         * Expense amount > The percentage that is deducted from the VAT amount paid to
         * the supplier for specific purchases.
         */
        public int|float|null $expenseAmount = null,
        /**
         * Include in VAT exempt total > A check box that indicates (if selected) that
         * this value-added VAT has a zero rate and is used to calculate a document
         * subtotal that is actually exempt from VAT.
         */
        public ?bool $includeInVatExemptTotal = null,
        /**
         * Pending VAT > A check box that indicates (if selected) that the VAT that
         * should be calculated in documents, but should not be recorded to the VAT
         * report until the VAT invoice is received.
         */
        public ?bool $pendingVat = null,
        /**
         * Statistical VAT > A check box that indicates (if selected) that the VAT on
         * documents will be calculated only for statistical purposes or will be
         * reported only but not actually paid.
         */
        public ?bool $statisticalVat = null,
        /**
         * Reverse VAT > A check box that indicates (if selected) that this is a reverse
         * VAT.
         */
        public ?bool $reverseVat = null,
        /** VAT type > The type of VAT. */
        public ?CashTranTaxDetailTaxTypeEnum $taxType = null,
    ) {}
}
