<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Financial details tab &gt; The VAT info section &gt; Dunning letter date
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerVatZoneInCustomerOverdueChargeDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerVatZoneInCustomerOverdueChargeDtoFactory factory()
 */
class CustomerVatZoneInCustomerOverdueChargeDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
