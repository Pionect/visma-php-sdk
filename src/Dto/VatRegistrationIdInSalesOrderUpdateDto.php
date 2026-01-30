<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field if Customer or GLN is not specified.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\VatRegistrationIdInSalesOrderUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\VatRegistrationIdInSalesOrderUpdateDtoFactory testFactory()
 */
class VatRegistrationIdInSalesOrderUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
