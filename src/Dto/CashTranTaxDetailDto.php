<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CashTranTaxDetailDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CashTranTaxDetailDtoFactory factory()
 */
class CashTranTaxDetailDto extends Model
{
    #[Property]
    public ?taxInCashTranTaxDetailDto $tax;

    /** VAT rate &gt; The rate of the VAT. */
    #[Property]
    public ?float $taxRate;

    /** Taxable amount &gt; The taxable amount of the transaction. */
    #[Property]
    public ?float $taxableAmount;

    /** VAT amount &gt; The VAT amount calculated for the transaction. */
    #[Property]
    public ?float $taxAmount;

    /** Deductible VAT rate &gt; The percent of deduction that applies to the VAT amount paid to the supplier for specific purchases. */
    #[Property]
    public ?float $deductibleTaxRate;

    /** Expense amount &gt; The percentage that is deducted from the VAT amount paid to the supplier for specific purchases. */
    #[Property]
    public ?float $expenseAmount;

    /** Include in VAT exempt total &gt; A check box that indicates (if selected) that this value-added VAT has a zero rate and is used to calculate a document subtotal that is actually exempt from VAT. */
    #[Property]
    public ?bool $includeInVatExemptTotal;

    /** Pending VAT &gt; A check box that indicates (if selected) that the VAT that should be calculated in documents, but should not be recorded to the VAT report until the VAT invoice is received. */
    #[Property]
    public ?bool $pendingVat;

    /** Statistical VAT &gt; A check box that indicates (if selected) that the VAT on documents will be calculated only for statistical purposes or will be reported only but not actually paid. */
    #[Property]
    public ?bool $statisticalVat;

    /** Reverse VAT &gt; A check box that indicates (if selected) that this is a reverse VAT. */
    #[Property]
    public ?bool $reverseVat;

    /** VAT type &gt; The type of VAT. */
    #[Property]
    public ?string $taxType;
}
