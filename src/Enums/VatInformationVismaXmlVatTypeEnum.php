<?php

namespace Pionect\VismaSdk\Enums;

/**
 * VAT settings tab > Visma XML VAT type > The VAT type to be used in Visma XML
 * files.
 */
enum VatInformationVismaXmlVatTypeEnum: string
{
    case VAT_TYPE_HIGH = 'VatTypeHigh';
    case VAT_TYPE_MEDIUM = 'VatTypeMedium';
    case VAT_TYPE_LOW = 'VatTypeLow';
    case VAT_TYPE_ZERO = 'VatTypeZero';
    case VAT_TYPE_EXEMPT = 'VatTypeExempt';
}
