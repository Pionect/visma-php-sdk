<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The description of the reported quantity.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DescriptionInTimeCardMaterialsUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DescriptionInTimeCardMaterialsUpdateDtoFactory factory()
 */
class DescriptionInTimeCardMaterialsUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
