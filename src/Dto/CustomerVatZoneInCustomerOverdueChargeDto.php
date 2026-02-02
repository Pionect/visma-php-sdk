<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * The Financial details tab &gt; The VAT info section &gt; Dunning letter date
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerVatZoneInCustomerOverdueChargeDtoFactory testFactory()
 */
class CustomerVatZoneInCustomerOverdueChargeDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
