<?php

namespace Pionect\VismaSdk\Enums;

/**
 * Document details tab > Transfer order type > The type of the transfer order
 * to which this receipt is linked.
 */
enum PurchaseReceiptLineTransferOrderTypeEnum: string
{
    case CREDIT_NOTE = 'CreditNote';
    case DEBIT_NOTE = 'DebitNote';
    case INVOICE = 'Invoice';
    case QUOTE_ORDER = 'QuoteOrder';
    case RMAORDER = 'RMAOrder';
    case SALES_ORDER = 'SalesOrder';
    case STANDARD_ORDER = 'StandardOrder';
    case TRANSFER_ORDER = 'TransferOrder';
}
