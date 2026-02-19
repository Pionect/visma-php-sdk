<?php

namespace Pionect\VismaSdk\Enums;

/**
 * The origin of this fixed asset transaction. Origin can be
 */
enum FixedAssetTransactionOriginEnum: string
{
    case ADJUSTMENT = 'Adjustment';
    case PURCHASING = 'Purchasing';
    case DEPRECIATION = 'Depreciation';
    case DISPOSAL = 'Disposal';
    case TRANSFER = 'Transfer';
    case RECONCILIATION = 'Reconciliation';
    case SPLIT = 'Split';
    case REVERSAL = 'Reversal';
    case DISPOSAL_REVERSAL = 'DisposalReversal';
}
