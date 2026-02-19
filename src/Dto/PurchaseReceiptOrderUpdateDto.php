<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\PurchaseOrderLineOrderTypeEnum;
use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a Purchase Order reference number to add to a Purchase Receipt.
 *
 * @method static \Pionect\VismaSdk\Factories\PurchaseReceiptOrderUpdateDtoFactory testFactory()
 */
class PurchaseReceiptOrderUpdateDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** The reference number of the Purchase Order. */
        public ?string $orderNbr = null,
        public ?PurchaseOrderLineOrderTypeEnum $orderType = null,
        /** @var AllocationsUpdateDto[]|null */
        public ?array $allocations = null,
    ) {}
}
