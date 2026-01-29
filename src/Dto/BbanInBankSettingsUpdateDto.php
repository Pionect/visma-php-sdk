<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * BBAN
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BbanInBankSettingsUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BbanInBankSettingsUpdateDtoFactory factory()
 */
class BbanInBankSettingsUpdateDto extends Model
{
    #[Property]
    public ?string $value;
}
