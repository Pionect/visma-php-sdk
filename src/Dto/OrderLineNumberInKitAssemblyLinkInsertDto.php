<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Reference to the order line number that the kit assembly is connected to
 */
class OrderLineNumberInKitAssemblyLinkInsertDto extends Model
{
    #[Property]
    public ?int $value;
}
