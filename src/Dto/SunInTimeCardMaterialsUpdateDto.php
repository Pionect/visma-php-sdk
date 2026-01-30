<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The quantity reported for Sunday.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SunInTimeCardMaterialsUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SunInTimeCardMaterialsUpdateDtoFactory factory()
 */
class SunInTimeCardMaterialsUpdateDto extends Model
{
    public function __construct(
        public int|float|null $value = null,
    ) {}
}
