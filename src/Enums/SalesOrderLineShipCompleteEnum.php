<?php

namespace Pionect\VismaSdk\Enums;

/**
 * Shipping rule > An option that controls whether incomplete and partial
 * shipments for the order are allowed. (Values: Ship complete, Back order
 * allowed, Cancel remainder)
 */
enum SalesOrderLineShipCompleteEnum: string
{
    case BACK_ORDER_ALLOWED = 'BackOrderAllowed';
    case CANCEL_REMAINDER = 'CancelRemainder';
    case SHIP_COMPLETE = 'ShipComplete';
}
