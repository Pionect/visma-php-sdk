<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\ShipmentOrderLineDtoFactory testFactory()
 */
class ShipmentOrderLineDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

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
