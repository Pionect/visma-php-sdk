<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\KitAssemblyNonStockComponentDtoFactory testFactory()
 */
class KitAssemblyNonStockComponentDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\KitAssemblyNonStockComponentDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $lineNbr = null,
        public ?string $itemId = null,
        public ?string $description = null,
        public ?string $uoM = null,
        public int|float|null $quantity = null,
        public int|float|null $unitCost = null,
        public ?string $reasonCode = null,
        public int|float|null $componentQty = null,
        public ?bool $allowComponentQtyVariance = null,
        public int|float|null $minComponentQty = null,
        public int|float|null $maxComponentQty = null,
        public ?string $errorInfo = null,
    ) {}
}
