<?php

namespace Pionect\VismaSdk\Enums;

/**
 * The status of the document.
 */
enum ExpenseClaimQueryParametersStatusEnum: string
{
    case HOLD = 'Hold';
    case PENDING_APPROVAL = 'PendingApproval';
    case APPROVED = 'Approved';
    case REJECTED = 'Rejected';
    case RELEASED = 'Released';
}
