<?php

namespace Pionect\VismaSdk\Enums;

/**
 * Exception error code
 */
enum StocktakeV2exceptionErrorCodeEnum: string
{
    case NOT_DEFINED = 'NotDefined';
    case INVENTORY_IDNOT_FOUND = 'InventoryIDNotFound';
    case LOCATION_IDNOT_FOUND = 'LocationIDNotFound';
    case REASON_CODE_NOT_FOUND = 'ReasonCodeNotFound';
    case ITEM_IS_NOT_STOCK_ITEM = 'ItemIsNotStockItem';
    case COMBINATION_ALREADY_IN_USE = 'CombinationAlreadyInUse';
    case COMBINATION_NOT_ALLOWED = 'CombinationNotAllowed';
    case LOT_SERIAL_NUMBER_ALREADY_IN_USE = 'LotSerialNumberAlreadyInUse';
}
