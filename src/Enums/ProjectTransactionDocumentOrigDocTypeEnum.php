<?php

namespace Pionect\VismaSdk\Enums;

/**
 * The top part > Orig. doc. no. > The type of the document the transaction is
 * based on. It has one of the following values: Allocation, Time card, Case,
 * Expense claim, Allocation reversal, Reversal, Credit note.
 */
enum ProjectTransactionDocumentOrigDocTypeEnum: string
{
    case ALLOCATION = 'Allocation';
    case TIMECARD = 'Timecard';
    case CASE = 'Case';
    case EXPENSE_CLAIM = 'ExpenseClaim';
    case EQUIPMENT_TIMECARD = 'EquipmentTimecard';
    case ALLOCATION_REVERSAL = 'AllocationReversal';
    case REVERSAL = 'Reversal';
    case CREDIT_MEMO = 'CreditMemo';
    case UNBILLED_REMAINDER = 'UnbilledRemainder';
    case PROFORMA_BILLING = 'ProformaBilling';
}
