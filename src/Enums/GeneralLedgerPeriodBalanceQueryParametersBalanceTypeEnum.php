<?php

namespace Pionect\VismaSdk\Enums;

/**
 * Balance Type of the ledger to be exported
 */
enum GeneralLedgerPeriodBalanceQueryParametersBalanceTypeEnum: string
{
    case ACTUAL = 'Actual';
    case REPORT = 'Report';
    case STATISTICAL = 'Statistical';
    case BUDGET = 'Budget';
}
