<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field if Customer or VatRegistrationId is not specified.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\GlnInSalesOrderUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\GlnInSalesOrderUpdateDtoFactory factory()
 */
class GlnInSalesOrderUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
