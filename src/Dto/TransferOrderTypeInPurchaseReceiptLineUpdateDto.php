<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Document details tab &gt; The type of the transfer order to which this receipt is linked.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\TransferOrderTypeInPurchaseReceiptLineUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\TransferOrderTypeInPurchaseReceiptLineUpdateDtoFactory factory()
 */
class TransferOrderTypeInPurchaseReceiptLineUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
