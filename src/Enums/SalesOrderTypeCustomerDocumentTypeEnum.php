<?php

namespace Pionect\VismaSdk\Enums;

/**
 * Template settings tab > Customer document type > The type of customer ledger
 * document to be generated on release of a document of this type.
 */
enum SalesOrderTypeCustomerDocumentTypeEnum: string
{
    case INVOICE = 'Invoice';
    case DEBIT_MEMO = 'DebitMemo';
    case CREDIT_MEMO = 'CreditMemo';
    case CASH_SALE = 'CashSale';
    case CASH_RETURN = 'CashReturn';
    case NO_UPDATE = 'NoUpdate';
}
