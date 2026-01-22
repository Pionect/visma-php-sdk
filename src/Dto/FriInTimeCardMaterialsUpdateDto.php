<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The quantity reported for Friday.
 */
class FriInTimeCardMaterialsUpdateDto extends Model
{
    #[Property]
    public ?float $value;
}
