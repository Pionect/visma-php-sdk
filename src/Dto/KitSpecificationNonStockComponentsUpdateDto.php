<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\KitSpecificationNonStockComponentsUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\KitSpecificationNonStockComponentsUpdateDtoFactory factory()
 */
class KitSpecificationNonStockComponentsUpdateDto extends Model
{
    public function __construct(
        public ?string $operation = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?int $lineNbr = null,
        #[MapName('compInventoryID'), WithTransformer(ValueWrapperTransformer::class)]
        public ?string $compInventoryId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $dfltCompQty = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $uom = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $allowQtyVariation = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $minCompQty = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $maxCompQty = null,
    ) {}
}
