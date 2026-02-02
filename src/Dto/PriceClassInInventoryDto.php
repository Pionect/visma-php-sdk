<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * The Price/cost information tab &gt; Price management section &gt; Price class &gt; The item price
 * class associated with the non-stock item. Group stock or non-stock items with similar price
 * calculation methods.
 *
 * @method static \Pionect\VismaSdk\Factories\PriceClassInInventoryDtoFactory testFactory()
 */
class PriceClassInInventoryDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
