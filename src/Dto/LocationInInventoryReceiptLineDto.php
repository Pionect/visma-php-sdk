<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Location &gt; The warehouse location from which the goods are transferred.
 *
 * @method static \Pionect\VismaSdk\Factories\LocationInInventoryReceiptLineDtoFactory testFactory()
 */
class LocationInInventoryReceiptLineDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $countryId = null,
        public ?string $id = null,
        public ?string $name = null,
    ) {}
}
