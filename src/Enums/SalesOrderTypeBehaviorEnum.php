<?php

namespace Pionect\VismaSdk\Enums;

/**
 * Template settings tab > Automation behaviour > An automation behaviour is a
 * set of automation steps. The type of automation behaviour used for the
 * template, which can be Sales order, Invoice, Quote, Credit note, or RMA
 * order.
 */
enum SalesOrderTypeBehaviorEnum: string
{
    case SALES_ORDER = 'SalesOrder';
    case INVOICE = 'Invoice';
    case QUOTE = 'Quote';
    case RMAORDER = 'RMAOrder';
    case CREDIT_MEMO = 'CreditMemo';
}
