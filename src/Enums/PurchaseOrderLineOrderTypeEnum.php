<?php

namespace Pionect\VismaSdk\Enums;

/**
 * Order type > The order type this order is related to (for normal orders based
 * on blanket or standard orders).
 */
enum PurchaseOrderLineOrderTypeEnum: string
{
    case REGULAR_ORDER = 'RegularOrder';
    case DROP_SHIP = 'DropShip';
    case BLANKET = 'Blanket';
    case STANDARD_BLANKET = 'StandardBlanket';
}
