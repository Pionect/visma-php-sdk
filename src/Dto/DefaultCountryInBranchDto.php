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
        public ?string $id = null,
        public ?string $name = null,
        public ?string $errorInfo = null,
    ) {}
}
