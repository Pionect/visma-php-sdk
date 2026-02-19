<?php

namespace Pionect\VismaSdk\Enums;

/**
 * Calculate on > The way the VAT amount is calculated, which can be one of the
 * following options: Extract from item amount, Document amount, Document and
 * VAT amount.
 */
enum VatCategoryLineCalculateOnEnum: string
{
    case EXTRACT_FROM_ITEM_AMOUNT = 'ExtractFromItemAmount';
    case ITEM_AMOUNT = 'ItemAmount';
    case ITEM_TAX_AMOUNT = 'ItemTaxAmount';
    case DOCUMENT_AMOUNT = 'DocumentAmount';
    case DOCUMEN_TAX_AMOUNT = 'DocumenTaxAmount';
}
