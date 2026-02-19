<?php

namespace Pionect\VismaSdk\Enums;

/**
 * The operation to be performed in the workspace to fulfil the order. This
 * information is collected from the system and not visible on the sales order
 * line.
 */
enum SalesOrderLineOperationEnum: string
{
    case ISSUE = 'Issue';
    case RECEIPT = 'Receipt';
}
