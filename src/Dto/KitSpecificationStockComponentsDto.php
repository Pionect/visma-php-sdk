<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\KitSpecificationStockComponentsDtoFactory testFactory()
 */
class KitSpecificationStockComponentsDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\KitSpecificationStockComponentsDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $lineNbr = null,
        #[MapName('componentID')]
        public ?string $componentId = null,
        public int|float|null $componentQty = null,
        public ?string $uom = null,
        public ?bool $allowComponentQtyVariance = null,
        public int|float|null $minComponentQty = null,
        public int|float|null $maxComponentQty = null,
        public int|float|null $disassemblyCoeff = null,
        public ?bool $allowComponentSubstitution = null,
        public ?string $description = null,
        public ?string $errorInfo = null,
    ) {}
}
