<?php

namespace Pionect\VismaSdk\Enums;

/**
 * Select to filter on status on order.
 */
enum SalesOrderQueryParametersStatusEnum: string
{
    case OPEN = 'Open';
    case HOLD = 'Hold';
    case CREDIT_HOLD = 'CreditHold';
    case COMPLETED = 'Completed';
    case CANCELLED = 'Cancelled';
    case BACK_ORDER = 'BackOrder';
    case SHIPPING = 'Shipping';
    case INVOICED = 'Invoiced';
    case PENDING_APPROVAL = 'PendingApproval';
    case VOIDED = 'Voided';
}
