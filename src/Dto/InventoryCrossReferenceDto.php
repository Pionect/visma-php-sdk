<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class InventoryCrossReferenceDto extends Model
{
    /** Alternate type &gt; The type of alternate codification used for the item if applicable. */
    #[Property]
    public ?string $alternateType;

    #[Property]
    public ?\bAccountInInventoryCrossReferenceDto $bAccount;

    /** Mandatory field: Alternate ID &gt; The alternate ID of the stock item (under the specified item ID) as used by the supplier or customer. */
    #[Property]
    public ?string $alternateId;

    /** Description &gt; Any comments applicable to the specified cross-reference. */
    #[Property]
    public ?string $description;

    /** UoM &gt; The unit of measure used for this component. */
    #[Property]
    public ?string $uom;

    /** Timestamp of the inventory item the crossreference belongs to */
    #[Property]
    public ?string $timestamp;
}
