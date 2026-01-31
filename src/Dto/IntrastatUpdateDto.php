<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * This class represents a Intrastat part of InventoryItem in InventoryItemController. Used for
 * insert/update data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\IntrastatUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\IntrastatUpdateDtoFactory testFactory()
 */
class IntrastatUpdateDto extends Model
{
    public function __construct(
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $cN8 = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $countryOfOrigin = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $supplementaryMeasureUnit = null,
    ) {}
}
