<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * VAT zone &gt; The VAT zone to be used by default with this entry type.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\VatZoneInEntryTypeDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\VatZoneInEntryTypeDtoFactory factory()
 */
class VatZoneInEntryTypeDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
        public ?string $defaultVatCategory = null,
        public ?TaxCategoryNumberDescriptionDto $defaultTaxCategory = null,
        public ?string $errorInfo = null,
    ) {}
}
