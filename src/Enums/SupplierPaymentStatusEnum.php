<?php

namespace Pionect\VismaSdk\Enums;

/**
 * The top part > Status > The status of the supplier ledger document, which can
 * be one of the following: On Hold, Printed, Open, Reserved, Closed, Voided,
 * Released.
 */
enum SupplierPaymentStatusEnum: string
{
    case HOLD = 'Hold';
    case BALANCED = 'Balanced';
    case VOIDED = 'Voided';
    case SCHEDULED = 'Scheduled';
    case OPEN = 'Open';
    case CLOSED = 'Closed';
    case PRINTED = 'Printed';
    case PREBOOKED = 'Prebooked';
    case PENDING_APPROVAL = 'PendingApproval';
    case REJECTED = 'Rejected';
    case RESERVED = 'Reserved';
    case PENDING_PRINT = 'PendingPrint';
}
