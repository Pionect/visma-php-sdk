<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * General information tab &gt; Location address section &gt; VAT zone &gt; The VAT zone associated
 * with the account location.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\VatZoneInSupplierLocationDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\VatZoneInSupplierLocationDtoFactory testFactory()
 */
class VatZoneInSupplierLocationDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
        public ?string $defaultVatCategory = null,
        public ?TaxCategoryNumberDescriptionDto $defaultTaxCategory = null,
        public ?string $errorInfo = null,
    ) {}
}
