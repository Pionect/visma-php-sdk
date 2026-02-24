<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * The Price/cost information tab &gt; Price management section &gt; Price manager &gt; The manager
 * responsible for the product pricing.
 *
 * @method static \Pionect\VismaSdk\Factories\PriceManagerInInventoryDtoFactory testFactory()
 */
class PriceManagerInInventoryDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\PriceManagerInInventoryDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $name = null,
    ) {}
}
