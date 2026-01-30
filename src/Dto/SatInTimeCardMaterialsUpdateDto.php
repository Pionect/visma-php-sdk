<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The quantity reported for Saturday.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SatInTimeCardMaterialsUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SatInTimeCardMaterialsUpdateDtoFactory factory()
 */
class SatInTimeCardMaterialsUpdateDto extends Model
{
    public function __construct(
        public int|float|null $value = null,
    ) {}
}
