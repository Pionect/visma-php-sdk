<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Country &gt; The country.
 *
 * @method static \Pionect\VismaSdk\Factories\CountryInAddressDtoFactory testFactory()
 */
class CountryInAddressDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\CountryInAddressDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /**
         * Mandatory field: Country ID* > The unique two-letter country ID according to
         * international standard ISO 3166.
         */
        public ?string $id = null,
        /** Mandatory field: Country name* > The complete name of the country. */
        public ?string $name = null,
        public ?string $errorInfo = null,
    ) {}
}
