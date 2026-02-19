<?php

namespace Pionect\VismaSdk\Enums;

/**
 * The top part > Status > The status of the transaction, which is automatically
 * assigned by the system.
 */
enum CashTransactionStatusEnum: string
{
    case BALANCED = 'Balanced';
    case HOLD = 'Hold';
    case RELEASED = 'Released';
    case PENDING = 'Pending';
    case REJECTED = 'Rejected';
}
