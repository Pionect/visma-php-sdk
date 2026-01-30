<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Price/cost information tab &gt; Price management section &gt; Price manager &gt; The manager
 * responsible for the product pricing.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PriceManagerInInventoryDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PriceManagerInInventoryDtoFactory testFactory()
 */
class PriceManagerInInventoryDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $name = null,
    ) {}
}
