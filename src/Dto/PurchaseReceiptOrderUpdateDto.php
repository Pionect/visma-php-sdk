<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a Purchase Order reference number to add to a Purchase Receipt.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PurchaseReceiptOrderUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PurchaseReceiptOrderUpdateDtoFactory testFactory()
 */
class PurchaseReceiptOrderUpdateDto extends Model
{
    public function __construct(
        public ?string $orderNbr = null,
        public ?string $orderType = null,
        public ?array $allocations = null,
    ) {}
}
