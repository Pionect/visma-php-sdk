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
        /** Location*. */
        public ?string $countryId = null,
        /** Click the magnifier > The identifier */
        public ?string $id = null,
        /** Click the magnifier > The displayed name */
        public ?string $name = null,
    ) {}
}
