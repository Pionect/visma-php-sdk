<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The unit of measure of item
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\UoMinTimeCardMaterialsUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\UoMinTimeCardMaterialsUpdateDtoFactory factory()
 */
class UoMinTimeCardMaterialsUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
