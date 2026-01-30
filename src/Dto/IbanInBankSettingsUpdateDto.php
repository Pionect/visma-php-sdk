<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * IBAN
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\IbanInBankSettingsUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\IbanInBankSettingsUpdateDtoFactory factory()
 */
class IbanInBankSettingsUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
