<?php

namespace Pionect\VismaSdk\Enums;

enum EmployeeUpdateStatusEnum: string
{
    case ACTIVE = 'Active';
    case HOLD = 'Hold';
    case HOLD_PAYMENTS = 'HoldPayments';
    case INACTIVE = 'Inactive';
    case ONE_TIME = 'OneTime';
}
