<?php

namespace Pionect\VismaSdk\Enums;

/**
 * The top part > Status > The system-generated status of the purchase order,
 * which can be one of the following options: On hold, Open, Pending approval,
 * Rejected, Pending printing, Pending e-mail, Closed, Cancelled.
 */
enum PurchaseOrderStatusEnum: string
{
    case BALANCED = 'Balanced';
    case CANCELLED = 'Cancelled';
    case CLOSED = 'Closed';
    case HOLD = 'Hold';
    case OPEN = 'Open';
    case PENDING_EMAIL = 'PendingEmail';
    case PENDING_PRINT = 'PendingPrint';
    case PRINTED = 'Printed';
    case VOIDED = 'Voided';
}
