<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\InventoryUnitDtoFactory testFactory()
 */
class InventoryUnitDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\InventoryUnitDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $unitType = null,
        public ?ItemClassDto $itemClass = null,
        /**
         * The top part > Item ID > The unique alphanumeric identifier of the stock
         * item.
         */
        #[MapName('inventoryID')]
        public ?int $inventoryId = null,
        /** To unit > The unit of measure selected as the base unit for the item. */
        public ?string $toUnit = null,
        public ?string $sampleToUnit = null,
        /**
         * Mandatory field: From unit > The unit of measure for which the conversion
         * parameters are specified.
         */
        public ?string $fromUnit = null,
        /** Multiply/divide > The operation to be performed for unit conversion. */
        public ?string $unitMultDiv = null,
        public int|float|null $unitRate = null,
        /**
         * Price adjustment multiplier > Changes the price automatically if you change
         * the UoM.
         */
        public int|float|null $priceAdjustmentMultiplier = null,
        #[MapName('recordID')]
        public ?int $recordId = null,
    ) {}
}
