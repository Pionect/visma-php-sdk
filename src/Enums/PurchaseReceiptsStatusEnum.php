<?php

namespace Pionect\VismaSdk\Enums;

/**
 * The top part > Status > The current status of the purchase or transfer
 * receipt, or return, which the system assigns automatically.
 */
enum PurchaseReceiptsStatusEnum: string
{
    case HOLD = 'Hold';
    case BALANCED = 'Balanced';
    case RELEASED = 'Released';
    case CANCELLED = 'Cancelled';
}
