<?php

namespace Pionect\VismaSdk\Enums;

/**
 * Type can be
 */
enum FixedAssetTransactionTransactionTypeEnum: string
{
    case PURCHASING_PLUS = 'PurchasingPlus';
    case PURCHASING_MINUS = 'PurchasingMinus';
    case DEPRECIATION_PLUS = 'DepreciationPlus';
    case DEPRECIATION_MINUS = 'DepreciationMinus';
    case CALCULATED_PLUS = 'CalculatedPlus';
    case CALCULATED_MINUS = 'CalculatedMinus';
    case SALE_PLUS = 'SalePlus';
    case SALE_MINUS = 'SaleMinus';
    case TRANSFER_PURCHASING = 'TransferPurchasing';
    case TRANSFER_DEPRECIATION = 'TransferDepreciation';
    case RECONCILIATION_PLUS = 'ReconciliationPlus';
    case RECONCILIATION_MINUS = 'ReconciliationMinus';
    case PURCHASING_DISPOSAL = 'PurchasingDisposal';
    case PURCHASING_REVERSAL = 'PurchasingReversal';
    case ADJUSTING_DEPR_PLUS = 'AdjustingDeprPlus';
    case ADJUSTING_DEPR_MINUS = 'AdjustingDeprMinus';
}
