<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field if Customer or VatRegistrationId is not specified.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\GlnInSalesOrderBasicUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\GlnInSalesOrderBasicUpdateDtoFactory factory()
 */
class GlnInSalesOrderBasicUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
