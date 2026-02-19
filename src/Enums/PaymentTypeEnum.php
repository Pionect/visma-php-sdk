<?php

namespace Pionect\VismaSdk\Enums;

/**
 * The top part > Type > The type of a document. The following types are
 * available: Payment, CreditNote, Prepayment, Customer refund, Void payment,
 * Balance write-off
 */
enum PaymentTypeEnum: string
{
    case PAYMENT = 'Payment';
    case CREDIT_NOTE = 'CreditNote';
    case PREPAYMENT = 'Prepayment';
    case REFUND = 'Refund';
    case VOID_PAYMENT = 'VoidPayment';
    case SMALL_BALANCE_WO = 'SmallBalanceWo';
    case VOID_REFUND = 'VoidRefund';
    case UNDEFINED = 'Undefined';
}
