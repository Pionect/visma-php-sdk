<?php

namespace Pionect\VismaSdk\Enums;

/**
 * Cash discount > The method of calculating the taxable amount if a discount is
 * applied (based on the credit terms). It can be one of the following options:
 * Reduce VAT amount, Does not affect VAT amount.
 */
enum VatCategoryLineCashDiscountEnum: string
{
    case TO_TAXABLE_AMOUNT = 'ToTaxableAmount';
    case TO_PROMT_PAYMENT = 'ToPromtPayment';
    case TO_TAX_AMOUNT = 'ToTaxAmount';
    case ADJUST_TAX = 'AdjustTax';
    case NO_ADJUST = 'NoAdjust';
}
