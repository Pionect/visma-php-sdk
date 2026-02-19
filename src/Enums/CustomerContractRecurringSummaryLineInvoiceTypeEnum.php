<?php

namespace Pionect\VismaSdk\Enums;

enum CustomerContractRecurringSummaryLineInvoiceTypeEnum: string
{
    case NONE = 'None';
    case PREPAY = 'Prepay';
    case USAGE = 'Usage';
    case DEPOSITS = 'Deposits';
}
