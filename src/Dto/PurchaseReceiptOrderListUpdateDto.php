<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a list of Purchase Orders to add to a Purchase Receipt.
 *
 * @method static \Pionect\VismaSdk\Factories\PurchaseReceiptOrderListUpdateDtoFactory testFactory()
 */
class PurchaseReceiptOrderListUpdateDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\PurchaseReceiptOrderListUpdateDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /**
         * @var PurchaseReceiptOrderUpdateDto[]|null
         *                                           The array of reference numbers of the Purchase Orders.
         */
        public ?array $purchaseOrders = null,
    ) {}
}
