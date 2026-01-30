<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The document details tab &gt; Salesperson ID &gt; The salesperson involved.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SalesPersonInCustomerOverdueChargeDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SalesPersonInCustomerOverdueChargeDtoFactory factory()
 */
class SalesPersonInCustomerOverdueChargeDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
