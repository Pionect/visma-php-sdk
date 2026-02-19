<?php

namespace Pionect\VismaSdk\Enums;

/**
 * The top part > Type >The type of supplier ledger payment document. The
 * following types are available: Payment, PUrchase credit note, Prepayment,
 * Supplier refund, Voided payment.
 */
enum SupplierPaymentTypeEnum: string
{
    case PAYMENT = 'Payment';
    case DEBIT_ADJ = 'DebitAdj';
    case PREPAYMENT = 'Prepayment';
    case REFUND = 'Refund';
    case VOID_PAYMENT = 'VoidPayment';
    case VOID_REFUND = 'VoidRefund';
}
