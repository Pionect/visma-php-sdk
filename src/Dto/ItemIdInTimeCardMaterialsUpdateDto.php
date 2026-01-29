<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Item Id
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ItemIdInTimeCardMaterialsUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ItemIdInTimeCardMaterialsUpdateDtoFactory factory()
 */
class ItemIdInTimeCardMaterialsUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
