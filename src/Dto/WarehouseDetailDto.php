<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a WarehouseDetail part of InventoryItem in InventoryItemController. Used for
 * getting data.
 *
 * @method static \Pionect\VismaSdk\Factories\WarehouseDetailDtoFactory testFactory()
 */
class WarehouseDetailDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?bool $isDefault = null,
        public ?string $warehouse = null,
        public int|float|null $quantityOnHand = null,
        public int|float|null $available = null,
        public int|float|null $availableForShipment = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
    ) {}
}
