<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The property is now considered obsolete, use SubaccountNumber instead. If SubaccountNumber is
 * specified in a request, this property is ignored.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SubaccountIdInSubAccountUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SubaccountIdInSubAccountUpdateDtoFactory testFactory()
 */
class SubaccountIdInSubAccountUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
