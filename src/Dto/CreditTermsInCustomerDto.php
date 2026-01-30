<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * General information tab &gt; Financial settings section &gt; Terms &gt; The type of credit terms
 * used in operations with the customer.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CreditTermsInCustomerDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CreditTermsInCustomerDtoFactory testFactory()
 */
class CreditTermsInCustomerDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
