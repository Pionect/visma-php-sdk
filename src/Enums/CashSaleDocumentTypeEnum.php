<?php

namespace Pionect\VismaSdk\Enums;

/**
 * The top part > Type > The document type. The following types are available:
 * invoice, debit note, credit note, overdue charge, credit write-off
 */
enum CashSaleDocumentTypeEnum: string
{
    case INVOICE = 'Invoice';
    case DEBIT_NOTE = 'DebitNote';
    case CREDIT_NOTE = 'CreditNote';
    case PAYMENT = 'Payment';
    case VOID_PAYMENT = 'VoidPayment';
    case PREPAYMENT = 'Prepayment';
    case REFUND = 'Refund';
    case FIN_CHARGE = 'FinCharge';
    case SMALL_BALANCE_WO = 'SmallBalanceWo';
    case SMALL_CREDIT_WO = 'SmallCreditWo';
    case CASH_SALE = 'CashSale';
    case CASH_RETURN = 'CashReturn';
    case UNDEFINED = 'Undefined';
    case NO_UPDATE = 'NoUpdate';
}
