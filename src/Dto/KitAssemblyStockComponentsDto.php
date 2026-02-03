<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\KitAssemblyStockComponentsDtoFactory testFactory()
 */
class KitAssemblyStockComponentsDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $lineNbr = null,
        public ?string $itemId = null,
        public ?string $description = null,
        public ?string $location = null,
        public ?string $uoM = null,
        public int|float|null $quantity = null,
        public int|float|null $unitCost = null,
        public ?string $reasonCode = null,
        public int|float|null $componentQty = null,
        public int|float|null $minComponentQty = null,
        public ?bool $allowComponentQtyVariance = null,
        public int|float|null $maxComponentQty = null,
        public ?bool $allowComponentSubstitution = null,
        public int|float|null $disassemblyCoeff = null,
        /** @var InallocationsDto[]|null */
        public ?array $allocations = null,
        public ?string $errorInfo = null,
    ) {}
}
