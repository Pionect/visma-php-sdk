<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * VAT settings section &gt; VAT zone &gt; The VAT zone that applies to the transaction.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\TaxZoneInFinancialsDetailDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\TaxZoneInFinancialsDetailDtoFactory factory()
 */
class TaxZoneInFinancialsDetailDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
        public ?string $defaultVatCategory = null,
        public ?TaxCategoryNumberDescriptionDto $defaultTaxCategory = null,
        public ?string $errorInfo = null,
    ) {}
}
