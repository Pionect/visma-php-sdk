<?php

namespace Pionect\VismaSdk\Dto;

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
    public function __construct(
        public ?string $value = null,
    ) {}
}
