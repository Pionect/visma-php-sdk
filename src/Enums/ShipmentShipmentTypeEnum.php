<?php

namespace Pionect\VismaSdk\Enums;

/**
 * The top part > Type > The type of the shipment document, which can be one of
 * the following options: Shipment, Transfer.
 */
enum ShipmentShipmentTypeEnum: string
{
    case ISSUE = 'Issue';
    case DROP_SHIP = 'DropShip';
    case TRANSFER = 'Transfer';
}
