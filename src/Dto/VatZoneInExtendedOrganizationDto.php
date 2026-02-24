<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Vat Zone
 *
 * @method static \Pionect\VismaSdk\Factories\VatZoneInExtendedOrganizationDtoFactory testFactory()
 */
class VatZoneInExtendedOrganizationDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\VatZoneInExtendedOrganizationDtoFactory> */
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
