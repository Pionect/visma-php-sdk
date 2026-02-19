<?php

namespace Pionect\VismaSdk\Enums;

/**
 * The top part > Means of payment > One of the system's built-in payment
 * templates. The following options are available: Credit card, Cash, Direct
 * deposit.
 */
enum PaymentMethodMeansOfPaymentEnum: string
{
    case CREDIT_CARD = 'CreditCard';
    case CASH_OR_CHECK = 'CashOrCheck';
    case DIRECT_DEPOSIT = 'DirectDeposit';
}
