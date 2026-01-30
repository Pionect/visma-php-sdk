<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field for creating a new location. Can not be updated after it has been created.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\BaccountIdInLocationUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\BaccountIdInLocationUpdateDtoFactory factory()
 */
class BaccountIdInLocationUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
