<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Reference to the order type that the kit assembly is connected to
 */
class OrderTypeInKitAssemblyLinkInsertDto extends Model
{
    #[Property]
    public ?string $value;
}
