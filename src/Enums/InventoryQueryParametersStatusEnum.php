<?php

namespace Pionect\VismaSdk\Enums;

/**
 * The inventory item status
 */
enum InventoryQueryParametersStatusEnum: string
{
    case ACTIVE = 'Active';
    case NO_SALES = 'NoSales';
    case NO_PURCHASES = 'NoPurchases';
    case NO_REQUEST = 'NoRequest';
    case INACTIVE = 'Inactive';
    case MARKED_FOR_DELETION = 'MarkedForDeletion';
}
