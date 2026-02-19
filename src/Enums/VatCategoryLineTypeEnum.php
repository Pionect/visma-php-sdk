<?php

namespace Pionect\VismaSdk\Enums;

/**
 * VAT type > The type of VAT, which defines how it is processed.
 */
enum VatCategoryLineTypeEnum: string
{
    case SALES = 'Sales';
    case USE = 'Use';
    case VAT = 'Vat';
    case WITHHOLDING = 'Withholding';
    case EXEMPT_VAT = 'ExemptVat';
    case STATISTICAL_VAT = 'StatisticalVat';
    case DIRECT_VAT = 'DirectVat';
    case PENDING_VAT = 'PendingVat';
    case REVERSE_VAT = 'ReverseVat';
}
