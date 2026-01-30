<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a WarehouseDetail part of InventoryItem in InventoryItemController. Used for
 * getting data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\WarehouseDetailDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\WarehouseDetailDtoFactory testFactory()
 */
class WarehouseDetailDto extends Model
{
    public function __construct(
        public ?bool $isDefault = null,
        public ?string $warehouse = null,
        public int|float|null $quantityOnHand = null,
        public int|float|null $available = null,
        public int|float|null $availableForShipment = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
    ) {}
}
