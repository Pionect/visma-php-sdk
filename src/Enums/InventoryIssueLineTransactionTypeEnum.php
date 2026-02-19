<?php

namespace Pionect\VismaSdk\Enums;

/**
 * Trans. type > The type of inventory issue transaction. Select one of the
 * following types: Issue, Return, Invoice, Debit note, Credit note.
 */
enum InventoryIssueLineTransactionTypeEnum: string
{
    case ISSUE = 'Issue';
    case RETURN = 'Return';
    case INVOICE = 'Invoice';
    case DEBIT_NOTE = 'DebitNote';
    case CREDIT_NOTE = 'CreditNote';
}
