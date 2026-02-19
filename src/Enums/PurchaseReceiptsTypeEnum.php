<?php

namespace Pionect\VismaSdk\Enums;

/**
 * The top part > Type > The type of the document, which can be Receipt, Return,
 * or Transfer receipt.
 */
enum PurchaseReceiptsTypeEnum: string
{
    case PO_RECEIPT = 'PoReceipt';
    case PO_RETURN = 'PoReturn';
    case TRANSFER_RECEIPT = 'TransferReceipt';
}
