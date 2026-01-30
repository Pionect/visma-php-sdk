<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The quantity reported for Tuesday.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\TueInTimeCardMaterialsUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\TueInTimeCardMaterialsUpdateDtoFactory testFactory()
 */
class TueInTimeCardMaterialsUpdateDto extends Model
{
    public function __construct(
        public int|float|null $value = null,
    ) {}
}
