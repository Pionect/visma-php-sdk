<?php

namespace Pionect\VismaSdk\Enums;

/**
 * The top part > Status > The status of the document, which can be one of the
 * following: Hold, Balanced, Voided, Scheduled, Open, Closed, Pending print,
 * Pending email.
 */
enum CashSaleStatusEnum: string
{
    case HOLD = 'Hold';
    case BALANCED = 'Balanced';
    case VOIDED = 'Voided';
    case SCHEDULED = 'Scheduled';
    case OPEN = 'Open';
    case CLOSED = 'Closed';
    case PENDING_PRINT = 'PendingPrint';
    case PENDING_EMAIL = 'PendingEmail';
    case CREDIT_HOLD = 'CreditHold';
    case CC_HOLD = 'CcHold';
    case RESERVED = 'Reserved';
}
