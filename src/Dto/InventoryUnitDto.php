<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\InventoryUnitDtoFactory testFactory()
 */
class InventoryUnitDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $unitType = null,
        public ?ItemClassDto $itemClass = null,
        #[MapName('inventoryID')]
        public ?int $inventoryId = null,
        public ?string $toUnit = null,
        public ?string $sampleToUnit = null,
        public ?string $fromUnit = null,
        public ?string $unitMultDiv = null,
        public int|float|null $unitRate = null,
        public int|float|null $priceAdjustmentMultiplier = null,
        #[MapName('recordID')]
        public ?int $recordId = null,
    ) {}
}
