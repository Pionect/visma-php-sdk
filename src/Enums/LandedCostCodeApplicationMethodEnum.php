<?php

namespace Pionect\VismaSdk\Enums;

/**
 * Application Method
 */
enum LandedCostCodeApplicationMethodEnum: string
{
    case FROM_AP = 'FromAP';
    case FROM_PO = 'FromPO';
    case FROM_BOTH = 'FromBoth';
}
