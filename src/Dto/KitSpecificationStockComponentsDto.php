<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\KitSpecificationStockComponentsDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\KitSpecificationStockComponentsDtoFactory factory()
 */
class KitSpecificationStockComponentsDto extends Model
{
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
