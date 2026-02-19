<?php

namespace Pionect\VismaSdk\Enums;

/**
 * The General information tab > Credit verification rules > Credit verification
 * > The credit rule applied to this customer. The following options are
 * available: Days past due, Credit limit, Limit and days past due, disabled.
 */
enum CustomerCreditVerificationEnum: string
{
    case DISABLED = 'Disabled';
    case DAYS_PAST_DUE = 'DaysPastDue';
    case CREDIT_LIMIT = 'CreditLimit';
    case LIMIT_AND_DAYS_PAST_DUE = 'LimitAndDaysPastDue';
}
