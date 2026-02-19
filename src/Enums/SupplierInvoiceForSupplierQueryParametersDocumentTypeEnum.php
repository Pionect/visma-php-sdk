<?php

namespace Pionect\VismaSdk\Enums;

/**
 * By type of document.
 */
enum SupplierInvoiceForSupplierQueryParametersDocumentTypeEnum: string
{
    case INVOICE = 'Invoice';
    case CREDIT_ADJ = 'CreditAdj';
    case DEBIT_ADJ = 'DebitAdj';
    case PREPAYMENT = 'Prepayment';
    case REFUND = 'Refund';
    case PAYMENT = 'Payment';
}
