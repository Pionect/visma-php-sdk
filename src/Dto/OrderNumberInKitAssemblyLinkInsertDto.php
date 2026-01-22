<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Reference to the order number that the kit assembly is connected to
 */
class OrderNumberInKitAssemblyLinkInsertDto extends Model
{
    #[Property]
    public ?string $value;
}
