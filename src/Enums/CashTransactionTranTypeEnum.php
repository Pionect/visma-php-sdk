<?php

namespace Pionect\VismaSdk\Enums;

/**
 * The top part > Trans type > 	The type of cash transaction.
 */
enum CashTransactionTranTypeEnum: string
{
    case TRANSFER_OUT = 'TransferOut';
    case TRANSFER_IN = 'TransferIn';
    case TRANSFER_EXP = 'TransferExp';
    case ADJUSTMENT = 'Adjustment';
}
