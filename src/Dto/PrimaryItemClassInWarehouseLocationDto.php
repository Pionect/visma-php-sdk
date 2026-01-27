<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Primary item class &gt; The primary item class for this location; items of this class are received
 * the most often or stored here in the highest volumes.
 */
class PrimaryItemClassInWarehouseLocationDto extends Model
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
