<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Mandatory field: The organisation details tab &gt; Configuration settings section &gt; Default
 * country* &gt; The default country, which is the country of most of the company's customers and
 * suppliers.
 *
 * @method static \Pionect\VismaSdk\Factories\DefaultCountryInBranchDtoFactory testFactory()
 */
class DefaultCountryInBranchDto extends SpatieData
{
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
