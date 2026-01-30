<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Price/cost information tab &gt; Price management section &gt; Price class &gt; The item price
 * class associated with the non-stock item. Group stock or non-stock items with similar price
 * calculation methods.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PriceClassInInventoryDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PriceClassInInventoryDtoFactory factory()
 */
class PriceClassInInventoryDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
