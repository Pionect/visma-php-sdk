<?php

namespace Pionect\VismaSdk\Enums;

/**
 * Mandatory field: The top part > Status > The status of the employee. The
 * following options are available: Active, On hold, Hold payments, Inactive,
 * One-time.
 */
enum EmployeeStatusEnum: string
{
    case ACTIVE = 'Active';
    case ON_HOLD = 'OnHold';
    case HOLD_PAYMENTS = 'HoldPayments';
    case INACTIVE = 'Inactive';
    case ONE_TIME = 'OneTime';
}
