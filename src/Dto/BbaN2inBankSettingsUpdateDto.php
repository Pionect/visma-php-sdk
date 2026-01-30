<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * BBAN 2
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BbaN2inBankSettingsUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BbaN2inBankSettingsUpdateDtoFactory factory()
 */
class BbaN2inBankSettingsUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
