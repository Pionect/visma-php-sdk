<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * VAT zone &gt; The VAT zone to be used by default with this entry type.
 *
 * @method static \Pionect\VismaSdk\Factories\VatZoneInEntryTypeDtoFactory testFactory()
 */
class VatZoneInEntryTypeDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /**
         * Click the magnifier. The identifier for the VAT zone of the supplier, which
         * is specified in the  AP303000 window.
         */
        public ?string $id = null,
        /**
         * Click the magnifier. The description for the VAT zone of the supplier, which
         * is specified in the  AP303000 window.
         */
        public ?string $description = null,
        /**
         * Click the magnifier. The Default VAT category for the VAT zone of the
         * supplier, which is specified in the  AP303000 window.
         */
        public ?string $defaultVatCategory = null,
        public ?TaxCategoryNumberDescriptionDto $defaultTaxCategory = null,
        public ?string $errorInfo = null,
    ) {}
}
