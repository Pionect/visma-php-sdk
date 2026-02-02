<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Mandatory field: Delivery settings tab &gt; Default location settings section &gt; VAT Zone* &gt;
 * The VAT zone of the customer's default location.
 *
 * @method static \Pionect\VismaSdk\Factories\VatZoneInCustomerDtoFactory testFactory()
 */
class VatZoneInCustomerDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
        public ?string $defaultVatCategory = null,
        public ?TaxCategoryNumberDescriptionDto $defaultTaxCategory = null,
        public ?string $errorInfo = null,
    ) {}
}
