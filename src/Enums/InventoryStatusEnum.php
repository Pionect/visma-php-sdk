<?php

namespace Pionect\VismaSdk\Enums;

/**
 * The top part > Item status > The status of the stock item. The alternatives
 * are: Active, No sales, No purchases, No request, Inactive, Marked for
 * deletion.
 */
enum InventoryStatusEnum: string
{
    case ACTIVE = 'Active';
    case NO_SALES = 'NoSales';
    case NO_PURCHASES = 'NoPurchases';
    case NO_REQUEST = 'NoRequest';
    case INACTIVE = 'Inactive';
    case MARKED_FOR_DELETION = 'MarkedForDeletion';
    case UNKNOWN = 'Unknown';
}
