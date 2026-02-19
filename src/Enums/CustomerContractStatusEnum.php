<?php

namespace Pionect\VismaSdk\Enums;

/**
 * The top part > Status > The status of the contract, which is one of the
 * following: Draft, Pending activation, Active, Expired, Cancelled, Pending
 * update.
 */
enum CustomerContractStatusEnum: string
{
    case DRAFT = 'Draft';
    case IN_APPROVAL = 'InApproval';
    case ACTIVE = 'Active';
    case EXPIRED = 'Expired';
    case CANCELED = 'Canceled';
    case COMPLETED = 'Completed';
    case IN_UPGRADE = 'InUpgrade';
    case PENDING_ACTIVATION = 'PendingActivation';
}
