<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: General information tab &gt; Item defaults section &gt; Lot/Serial Class* &gt; The
 * lot serial class ID of the stock item, which by default is the ID associated with the item class.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\LotSerialClassInInventoryDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\LotSerialClassInInventoryDtoFactory factory()
 */
class LotSerialClassInInventoryDto extends Model
{
    /** Click on the magnifier. &gt; The identifier. */
    #[Property]
    public ?string $id;

    /** Click on the magnifier. &gt; The description. */
    #[Property]
    public ?string $description;
}
