<?php

namespace Pionect\VismaSdk\Enums;

/**
 * The status of the document.
 */
enum ExpenseReceiptQueryParametersStatusEnum: string
{
    case OPEN = 'Open';
    case PENDING = 'Pending';
    case APPROVED = 'Approved';
    case REJECTED = 'Rejected';
    case RELEASED = 'Released';
}
