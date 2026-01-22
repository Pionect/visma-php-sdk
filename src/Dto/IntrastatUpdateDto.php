<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a Intrastat part of InventoryItem in InventoryItemController. Used for
 * insert/update data.
 */
class IntrastatUpdateDto extends Model
{
    #[Property]
    public ?\cN8InIntrastatUpdateDto $cN8;

    #[Property]
    public ?\countryOfOriginInIntrastatUpdateDto $countryOfOrigin;

    #[Property]
    public ?\supplementaryMeasureUnitInIntrastatUpdateDto $supplementaryMeasureUnit;
}
