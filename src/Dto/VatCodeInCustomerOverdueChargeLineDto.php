<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * VAT category &gt; The VAT category (if applied) for the transaction. The category represents the
 * type of goods or services.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\VatCodeInCustomerOverdueChargeLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\VatCodeInCustomerOverdueChargeLineDtoFactory factory()
 */
class VatCodeInCustomerOverdueChargeLineDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
