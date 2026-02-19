<?php

namespace Pionect\VismaSdk\Enums;

/**
 * Journal transaction status to query data for. Available statuses : Hold,
 * Balanced, Unposted, Posted, Voided, Scheduled, Unreleased.
 */
enum JournalTransactionQueryV2parametersStatusEnum: string
{
    case HOLD = 'Hold';
    case BALANCED = 'Balanced';
    case UNPOSTED = 'Unposted';
    case POSTED = 'Posted';
    case VOIDED = 'Voided';
    case SCHEDULED = 'Scheduled';
    case UNRELEASED = 'Unreleased';
}
