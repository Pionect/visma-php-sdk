<?php

namespace Pionect\VismaSdk\Enums;

/**
 * VAT type > The type of VAT.
 */
enum CashTranTaxDetailTaxTypeEnum: string
{
    case SALES = 'Sales';
    case USE = 'Use';
    case VAT = 'Vat';
    case WITHHOLDING = 'Withholding';
}
