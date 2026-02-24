<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\SalesOrderShipmentDtoFactory testFactory()
 */
class SalesOrderShipmentDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\SalesOrderShipmentDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

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
