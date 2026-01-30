<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * BIC
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BicInBankSettingsUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BicInBankSettingsUpdateDtoFactory factory()
 */
class BicInBankSettingsUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
