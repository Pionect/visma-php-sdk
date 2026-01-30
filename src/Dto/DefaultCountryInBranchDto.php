<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: The organisation details tab &gt; Configuration settings section &gt; Default
 * country* &gt; The default country, which is the country of most of the company's customers and
 * suppliers.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DefaultCountryInBranchDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DefaultCountryInBranchDtoFactory factory()
 */
class DefaultCountryInBranchDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $name = null,
        public ?string $errorInfo = null,
    ) {}
}
