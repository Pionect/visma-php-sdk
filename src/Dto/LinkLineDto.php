<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\LinkLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\LinkLineDtoFactory factory()
 */
class LinkLineDto extends Model
{
    public function __construct(
        public ?string $purchaseType = null,
        public ?PurchaseNumberInLinkLineDto $purchaseNumber = null,
        public ?PurchaseLineNbrInLinkLineDto $purchaseLineNbr = null,
    ) {}
}
