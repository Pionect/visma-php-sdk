<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a WarehouseDetail part of InventoryItem in InventoryItemController. Used for
 * getting data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\WarehouseDetailDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\WarehouseDetailDtoFactory factory()
 */
class WarehouseDetailDto extends Model
{
    #[Property]
    public ?bool $isDefault;

    /** Warehouse &gt; The warehouse where the stock item is available. */
    #[Property]
    public ?string $warehouse;

    /** Qty. on hand &gt; The quantity of this item available (on hand) at the warehouse. */
    #[Property]
    public ?float $quantityOnHand;

    #[Property]
    public ?float $available;

    #[Property]
    public ?float $availableForShipment;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $lastModifiedDateTime;
}
