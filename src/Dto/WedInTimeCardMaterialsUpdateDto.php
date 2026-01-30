<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The quantity reported for Wednesday.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\WedInTimeCardMaterialsUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\WedInTimeCardMaterialsUpdateDtoFactory factory()
 */
class WedInTimeCardMaterialsUpdateDto extends Model
{
    public function __construct(
        public int|float|null $value = null,
    ) {}
}
