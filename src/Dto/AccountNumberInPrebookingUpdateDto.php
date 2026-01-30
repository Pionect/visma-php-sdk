<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Account used for prebooking.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\AccountNumberInPrebookingUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\AccountNumberInPrebookingUpdateDtoFactory testFactory()
 */
class AccountNumberInPrebookingUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
