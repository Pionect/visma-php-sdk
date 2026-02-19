<?php

namespace Pionect\VismaSdk\Enums;

/**
 * Mandatory field: The top part > Status* > The status of the customer account.
 * You can select one of the following options: Active, On hold, Credit hold,
 * Inactive, One time.
 */
enum CustomerStatusEnum: string
{
    case ACTIVE = 'Active';
    case ON_HOLD = 'OnHold';
    case CREDIT_HOLD = 'CreditHold';
    case INACTIVE = 'Inactive';
    case ONE_TIME = 'OneTime';
}
