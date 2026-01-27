<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: General information tab &gt; Item defaults section &gt; Item class* &gt; The item
 * class to which the stock item is assigned.
 */
class ItemClassInInventoryDto extends Model
{
    #[Property]
    public ?string $type;

    #[Property]
    public ?array $attributes;

    /** The description. */
    #[Property]
    public ?string $description;

    #[Property]
    public ?string $errorInfo;
}
