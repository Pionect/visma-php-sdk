<?php

namespace Pionect\VismaSdk\Enums;

/**
 * The top part > Status > The current status of the batch. The status defines
 * what processing can be applied to the batch. The following options are
 * available: On hold, Balanced, Scheduled, Unposted, Posted, Void.
 */
enum JournalTransactionStatusEnum: string
{
    case HOLD = 'Hold';
    case BALANCED = 'Balanced';
    case UNPOSTED = 'Unposted';
    case POSTED = 'Posted';
    case COMPLETED = 'Completed';
    case VOIDED = 'Voided';
    case RELEASED = 'Released';
    case PARTIALLY_RELEASED = 'PartiallyReleased';
    case SCHEDULED = 'Scheduled';
}
