<?php

namespace Pionect\VismaSdk\Enums;

/**
 * The current status of the receipt. The following options are available:
 * On Hold:The receipt/issue is a draft and can be edited. Receipts with this
 * status cannot be released.
 * Balanced: The receipt/issue data has been validated by the system and the
 * receipt can be released. It also can be modified or deleted, but changes can
 * be saved only if the receipt is balanced.
 * Released: The receipt/issue has been released and cannot be edited or
 * deleted.
 */
enum InventoryAdjustmentStatusEnum: string
{
    case HOLD = 'Hold';
    case BALANCED = 'Balanced';
    case RELEASED = 'Released';
}
