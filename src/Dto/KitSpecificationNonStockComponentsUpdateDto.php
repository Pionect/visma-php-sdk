<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\AttributeDetailUpdateOperationEnum;
use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\KitSpecificationNonStockComponentsUpdateDtoFactory testFactory()
 */
class KitSpecificationNonStockComponentsUpdateDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\KitSpecificationNonStockComponentsUpdateDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?AttributeDetailUpdateOperationEnum $operation = null,
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
