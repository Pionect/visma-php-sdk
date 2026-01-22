<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The alternate type field. Select one of the following predefined types: CPN, VPN, Global, Barcode
 */
class AlternateTypeInInventoryCrossReferenceUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
