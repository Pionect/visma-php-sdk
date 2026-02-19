<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Shipping instructions tab &gt; The Delivery address section &gt; Ship to &gt; The particular
 * destination of the selected type.
 *
 * @method static \Pionect\VismaSdk\Factories\ShipToInPurchaseOrderDtoFactory testFactory()
 */
class ShipToInPurchaseOrderDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $internalId = null,
        /** The identifier of the particular destination of the selected type. */
        public ?string $number = null,
        /** The name of the particular destination of the selected type. */
        public ?string $name = null,
    ) {}
}
