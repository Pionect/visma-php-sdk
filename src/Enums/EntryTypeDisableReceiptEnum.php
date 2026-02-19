<?php

namespace Pionect\VismaSdk\Enums;

/**
 * Disb/receipt > The basic type of cash transaction designated by this entry
 * type: Receipt or Disbursement.
 */
enum EntryTypeDisableReceiptEnum: string
{
    case DISBURSEMENT = 'Disbursement';
    case RECEIPT = 'Receipt';
}
