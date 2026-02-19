<?php

namespace Pionect\VismaSdk\Enums;

/**
 * Allocation Method
 */
enum LandedCostCodeAllocationMethodEnum: string
{
    case BY_QUANTITY = 'ByQuantity';
    case BY_COST = 'ByCost';
    case BY_WEIGHT = 'ByWeight';
    case BY_VOLUME = 'ByVolume';
    case NONE = 'None';
}
