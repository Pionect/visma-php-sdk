<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\StocktakeLineV2dtoFactory testFactory()
 */
class StocktakeLineV2dto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $status = null,
        public ?int $lineNbr = null,
        public ?int $tagNbr = null,
        public ?InventoryInStocktakeLineV2dto $inventory = null,
        public ?LocationInStocktakeLineV2dto $location = null,
        public ?WarehouseInStocktakeLineV2dto $warehouse = null,
        public ?string $lotSerialNbr = null,
        public ?\Carbon\Carbon $expirationDate = null,
        public int|float|null $bookQuantity = null,
        public int|float|null $physicalQuantity = null,
        public int|float|null $varianceQuantity = null,
        public int|float|null $unitCost = null,
        public int|float|null $extVarianceCost = null,
        public ?string $reasonCode = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?string $baseUnit = null,
    ) {}
}
