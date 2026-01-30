<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Document details tab &gt; The description of the receipt or return transaction.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\TransactionDescriptionInPurchaseReceiptLineBasicUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\TransactionDescriptionInPurchaseReceiptLineBasicUpdateDtoFactory factory()
 */
class TransactionDescriptionInPurchaseReceiptLineBasicUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
