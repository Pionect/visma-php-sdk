<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: Document details tab &gt; Branch* &gt; The branch for which the item is purchased.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BranchNumberInPurchaseReceiptLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BranchNumberInPurchaseReceiptLineDtoFactory factory()
 */
class BranchNumberInPurchaseReceiptLineDto extends Model
{
    public function __construct(
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
