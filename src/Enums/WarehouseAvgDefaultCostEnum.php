<?php

namespace Pionect\VismaSdk\Enums;

/**
 * The top part > Avg. default return cost > For items with the Average
 * valuation method, the option that defines which of costs should be used for
 * returns and receipts.
 */
enum WarehouseAvgDefaultCostEnum: string
{
    case AVERAGE_COST = 'AverageCost';
    case LAST_COST = 'LastCost';
}
