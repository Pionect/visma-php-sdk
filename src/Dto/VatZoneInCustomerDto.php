<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: Delivery settings tab &gt; Default location settings section &gt; VAT Zone* &gt;
 * The VAT zone of the customer's default location.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\VatZoneInCustomerDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\VatZoneInCustomerDtoFactory factory()
 */
class VatZoneInCustomerDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
        public ?string $defaultVatCategory = null,
        public ?TaxCategoryNumberDescriptionDto $defaultTaxCategory = null,
        public ?string $errorInfo = null,
    ) {}
}
