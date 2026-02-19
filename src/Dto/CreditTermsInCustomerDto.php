<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * General information tab &gt; Financial settings section &gt; Terms &gt; The type of credit terms
 * used in operations with the customer.
 *
 * @method static \Pionect\VismaSdk\Factories\CreditTermsInCustomerDtoFactory testFactory()
 */
class CreditTermsInCustomerDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Click on the magnifier. > The identifier. */
        public ?string $id = null,
        /** Click on the magnifier. > The description. */
        public ?string $description = null,
    ) {}
}
