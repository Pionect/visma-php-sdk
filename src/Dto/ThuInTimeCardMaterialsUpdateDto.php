<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The quantity reported for Thursday.
 */
class ThuInTimeCardMaterialsUpdateDto extends Model
{
    #[Property]
    public ?float $value;
}
