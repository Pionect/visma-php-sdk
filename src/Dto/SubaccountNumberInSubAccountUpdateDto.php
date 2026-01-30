<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field, identifies the subaccount to update.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SubaccountNumberInSubAccountUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SubaccountNumberInSubAccountUpdateDtoFactory testFactory()
 */
class SubaccountNumberInSubAccountUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
