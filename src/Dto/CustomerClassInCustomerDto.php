<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Mandatory field: General information tab &gt; Financial settings section &gt; Customer class* &gt;
 * The class to which the customer is assigned.
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerClassInCustomerDtoFactory testFactory()
 */
class CustomerClassInCustomerDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Click on the magnifier. > The identifier. */
        public ?string $id = null,
        /** Click on the magnifier. > The description. */
        public ?string $description = null,
    ) {}
}
