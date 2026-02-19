<?php

namespace Pionect\VismaSdk\Enums;

/**
 * Invoicing settings > Print and email settings section > Statement type > The
 * statement type used by default in relations with the customer, which can be
 * one of the following: Open item, Balance brought forward.
 */
enum CustomerStatementTypeEnum: string
{
    case OPEN_ITEM = 'OpenItem';
    case BALANCE_BROUGHT_FORWARD = 'BalanceBroughtForward';
}
