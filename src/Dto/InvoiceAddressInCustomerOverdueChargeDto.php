<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * The Invoice address tab &gt; The Invoice address section.
 *
 * @method static \Pionect\VismaSdk\Factories\InvoiceAddressInCustomerOverdueChargeDtoFactory testFactory()
 */
class InvoiceAddressInCustomerOverdueChargeDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $addressId = null,
        public ?string $addressLine1 = null,
        public ?string $addressLine2 = null,
        public ?string $addressLine3 = null,
        public ?string $postalCode = null,
        public ?string $city = null,
        public ?CountryInCustomerDocumentAddressDto $country = null,
        public ?CountyInCustomerDocumentAddressDto $county = null,
        public ?bool $overrideAddress = null,
    ) {}
}
