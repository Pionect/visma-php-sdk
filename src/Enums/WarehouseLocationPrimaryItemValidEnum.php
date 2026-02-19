<?php

namespace Pionect\VismaSdk\Enums;

/**
 * Primary item validation > An option indicating whether the operations with
 * the primary item should be validated for this location and how.
 */
enum WarehouseLocationPrimaryItemValidEnum: string
{
    case PRIMARY_NOTHING = 'PrimaryNothing';
    case PRIMARY_ITEM_WARNING = 'PrimaryItemWarning';
    case PRIMARY_ITEM_ERROR = 'PrimaryItemError';
    case PRIMARY_ITEM_CLASS_WARNING = 'PrimaryItemClassWarning';
    case PRIMARY_ITEM_CLASS_ERROR = 'PrimaryItemClassError';
}
