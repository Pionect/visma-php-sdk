<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;

/**
 * Packaging tab
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PackagingInInventoryDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PackagingInInventoryDtoFactory testFactory()
 */
class PackagingInInventoryDto extends Model
{
    public function __construct(
        public int|float|null $baseItemWeight = null,
        #[MapName('weightUOM')]
        public ?string $weightUom = null,
        public int|float|null $baseItemVolume = null,
        #[MapName('volumeUOM')]
        public ?string $volumeUom = null,
    ) {}
}
