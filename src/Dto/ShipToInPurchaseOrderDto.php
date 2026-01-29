<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Shipping instructions tab &gt; The Delivery address section &gt; Ship to &gt; The particular
 * destination of the selected type.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ShipToInPurchaseOrderDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ShipToInPurchaseOrderDtoFactory factory()
 */
class ShipToInPurchaseOrderDto extends Model
{
    #[Property]
    public ?int $internalId;

    /** The identifier of the particular destination of the selected type. */
    #[Property]
    public ?string $number;

    /** The name of the particular destination of the selected type. */
    #[Property]
    public ?string $name;
}
