<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\VatCategoryDtoFactory testFactory()
 */
class VatCategoryDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\VatCategoryDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /**
         * Mandatory field: The top part > VAT category ID* > The unique ID of the VAT
         * category. An alphanumeric string of up to six characters can be used.
         */
        public ?string $vatCategoryId = null,
        /** The top part > Description > A detailed description of the category. */
        public ?string $description = null,
        /**
         * The top part > Active > A check box that means (if selected) that this VAT
         * category is active.
         */
        public ?bool $active = null,
        /**
         * The top part > Exclude listed taxes > A check box that indicates (if
         * selected) this VAT category should exclude the listed taxes from VAT zones.
         */
        public ?bool $excludeListedTaxes = null,
        /** Systemgenerated information. */
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        /**
         * @var VatCategoryLineDto[]|null
         */
        public ?array $vatCategoryLines = null,
    ) {}
}
