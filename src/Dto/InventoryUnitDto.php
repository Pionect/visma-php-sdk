<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\InventoryUnitDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\InventoryUnitDtoFactory testFactory()
 */
class InventoryUnitDto extends Model
{
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
