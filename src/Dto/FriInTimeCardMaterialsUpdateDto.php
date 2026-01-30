<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The quantity reported for Friday.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\FriInTimeCardMaterialsUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\FriInTimeCardMaterialsUpdateDtoFactory factory()
 */
class FriInTimeCardMaterialsUpdateDto extends Model
{
    public function __construct(
        public int|float|null $value = null,
    ) {}
}
