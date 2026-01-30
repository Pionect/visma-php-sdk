<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SalesOrderShipmentDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SalesOrderShipmentDtoFactory testFactory()
 */
class SalesOrderShipmentDto extends Model
{
    public function __construct(
        public ?string $shipmentType = null,
        public ?string $shipmentNo = null,
        public ?\Carbon\Carbon $shipmentDate = null,
        public int|float|null $shippedQty = null,
        public int|float|null $shippedWeight = null,
        public int|float|null $shippedVolume = null,
        public ?string $invoiceType = null,
        public ?string $invoiceNo = null,
        public ?string $inventoryDocType = null,
        public ?string $inventoryRefNo = null,
    ) {}
}
