<?php

namespace Pionect\VismaSdk\Enums;

/**
 * Type
 */
enum LandedCostCodeLandedCostTypeEnum: string
{
    case FREIGHT_AND_MIS_ORIGIN_CHARGES = 'FreightAndMisOriginCharges';
    case CUSTOM_DUTIES = 'CustomDuties';
    case VAT = 'VAT';
    case MISC_DESTINATION_CHARGES = 'MiscDestinationCharges';
    case OTHER = 'Other';
}
