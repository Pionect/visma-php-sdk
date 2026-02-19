<?php

namespace Pionect\VismaSdk\Enums;

/**
 * Purchase order source > The purchase order source to be used to fulfill this
 * line, which can be one of the following options: Purchase to order,
 * Drop-shipment.
 */
enum SalesOrderLinePoSourceEnum: string
{
    case DROP_SHIP_TO_ORDER = 'DropShipToOrder';
    case MANUFACTURED = 'Manufactured';
    case NONE = 'None';
    case PURCHASED = 'Purchased';
    case PURCHASE_TO_ORDER = 'PurchaseToOrder';
    case TRANSFER = 'Transfer';
}
