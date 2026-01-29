<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Document details tab &gt; The line number in the transfer order to which this receipt is linked.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\TransferOrderLineNbrInPurchaseReceiptLineUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\TransferOrderLineNbrInPurchaseReceiptLineUpdateDtoFactory factory()
 */
class TransferOrderLineNbrInPurchaseReceiptLineUpdateDto extends Model
{
    #[Property]
    public ?int $value;
}
