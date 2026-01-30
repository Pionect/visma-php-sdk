<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Purchase settings tab &gt; Default location settings section &gt; VAT zone &gt; The VAT zone of the
 * supplier's default location.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\VatZoneInSupplierDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\VatZoneInSupplierDtoFactory factory()
 */
class VatZoneInSupplierDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
        public ?string $defaultVatCategory = null,
        public ?TaxCategoryNumberDescriptionDto $defaultTaxCategory = null,
        public ?string $errorInfo = null,
    ) {}
}
