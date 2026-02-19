<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Mandatory field: General information tab &gt; Item defaults section &gt; Lot/Serial Class* &gt; The
 * lot serial class ID of the stock item, which by default is the ID associated with the item class.
 *
 * @method static \Pionect\VismaSdk\Factories\LotSerialClassInInventoryDtoFactory testFactory()
 */
class LotSerialClassInInventoryDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Click on the magnifier. > The identifier. */
        public ?string $id = null,
        /** Click on the magnifier. > The description. */
        public ?string $description = null,
    ) {}
}
