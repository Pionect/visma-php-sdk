<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Creditor Id
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CreditorIdInBankSettingsUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CreditorIdInBankSettingsUpdateDtoFactory testFactory()
 */
class CreditorIdInBankSettingsUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
