<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class InventoryUnitDto extends Model
{
    #[Property]
    public ?int $unitType;

    #[Property]
    public ?ItemClassDto $itemClass;

    /** The top part &gt; Item ID &gt; The unique alphanumeric identifier of the stock item. */
    #[Property]
    public ?int $inventoryId;

    /** To unit &gt; The unit of measure selected as the base unit for the item. */
    #[Property]
    public ?string $toUnit;

    #[Property]
    public ?string $sampleToUnit;

    /** Mandatory field: From unit &gt; The unit of measure for which the conversion parameters are specified. */
    #[Property]
    public ?string $fromUnit;

    /** Multiply/divide &gt; The operation to be performed for unit conversion. */
    #[Property]
    public ?string $unitMultDiv;

    #[Property]
    public ?float $unitRate;

    /** Price adjustment multiplier &gt; Changes the price automatically if you change the UoM. */
    #[Property]
    public ?float $priceAdjustmentMultiplier;

    #[Property]
    public ?int $recordId;
}
