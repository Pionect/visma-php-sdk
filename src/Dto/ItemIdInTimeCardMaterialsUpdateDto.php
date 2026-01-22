<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Item Id
 */
class ItemIdInTimeCardMaterialsUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
