<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a list of Purchase Orders to add to a Purchase Receipt.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PurchaseReceiptOrderListUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PurchaseReceiptOrderListUpdateDtoFactory testFactory()
 */
class PurchaseReceiptOrderListUpdateDto extends Model
{
    public function __construct(
        public ?array $purchaseOrders = null,
    ) {}
}
