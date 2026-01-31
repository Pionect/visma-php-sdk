<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * This class represents a Packaging part of InventoryItem in InventoryItemController. Used for
 * insert/update data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PackagingUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PackagingUpdateDtoFactory testFactory()
 */
class PackagingUpdateDto extends Model
{
    public function __construct(
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $baseItemWeight = null,
        #[MapName('weightUOM'), WithTransformer(ValueWrapperTransformer::class)]
        public ?string $weightUom = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $baseItemVolume = null,
        #[MapName('volumeUOM'), WithTransformer(ValueWrapperTransformer::class)]
        public ?string $volumeUom = null,
    ) {}
}
