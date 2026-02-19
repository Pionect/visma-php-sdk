<?php

namespace Pionect\VismaSdk\Enums;

/**
 * Receipt action > The action that should be perform when the ordered item is
 * received if its quantity is greater than the Max. receipt value or less than
 * the Min. receipt value calculated based on the line's ordered quantity.
 * Values: Reject, Accept but warn, Accept.
 */
enum PurchaseOrderLineReceiptActionEnum: string
{
    case REJECT = 'Reject';
    case ACCEPT_BUT_WARN = 'AcceptButWarn';
    case ACCEPT = 'Accept';
}
