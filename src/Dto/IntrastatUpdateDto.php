<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a Intrastat part of InventoryItem in InventoryItemController. Used for
 * insert/update data.
 *
 * @method static \Pionect\VismaSdk\Factories\IntrastatUpdateDtoFactory testFactory()
 */
class IntrastatUpdateDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\IntrastatUpdateDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $cN8 = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $countryOfOrigin = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $supplementaryMeasureUnit = null,
    ) {}
}
