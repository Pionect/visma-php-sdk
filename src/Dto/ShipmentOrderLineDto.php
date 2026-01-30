<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ShipmentOrderLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ShipmentOrderLineDtoFactory factory()
 */
class ShipmentOrderLineDto extends Model
{
    public function __construct(
        public ?string $orderType = null,
        public ?string $orderNbr = null,
        public int|float|null $shippedQty = null,
        public int|float|null $shippedWeight = null,
        public int|float|null $shippedVolume = null,
        public ?string $invoiceType = null,
        public ?string $invoiceNbr = null,
        public ?string $inventoryDocType = null,
        public ?string $inventoryRefNbr = null,
        public ?string $note = null,
    ) {}
}
