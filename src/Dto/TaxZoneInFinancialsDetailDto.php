<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * VAT settings section &gt; VAT zone &gt; The VAT zone that applies to the transaction.
 *
 * @method static \Pionect\VismaSdk\Factories\TaxZoneInFinancialsDetailDtoFactory testFactory()
 */
class TaxZoneInFinancialsDetailDto extends SpatieData
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
