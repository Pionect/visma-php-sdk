<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The description of the reported quantity.
 */
class DescriptionInTimeCardMaterialsUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
