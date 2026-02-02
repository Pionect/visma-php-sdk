<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * General information tab &gt; Location address section &gt; VAT zone &gt; The VAT zone associated
 * with the account location.
 *
 * @method static \Pionect\VismaSdk\Factories\VatZoneInSupplierLocationDtoFactory testFactory()
 */
class VatZoneInSupplierLocationDto extends SpatieData
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
