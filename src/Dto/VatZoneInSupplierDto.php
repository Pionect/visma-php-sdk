<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Purchase settings tab &gt; Default location settings section &gt; VAT zone &gt; The VAT zone of the
 * supplier's default location.
 *
 * @method static \Pionect\VismaSdk\Factories\VatZoneInSupplierDtoFactory testFactory()
 */
class VatZoneInSupplierDto extends SpatieData
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
