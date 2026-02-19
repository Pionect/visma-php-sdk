<?php

namespace Pionect\VismaSdk\Enums;

/**
 * Tax calculation mode > The tax calculation mode to be used by default with
 * this entry type
 */
enum EntryTypeTaxCalculationModeEnum: string
{
    case TAX_SETTING = 'TaxSetting';
    case GROSS = 'Gross';
    case NET = 'Net';
}
