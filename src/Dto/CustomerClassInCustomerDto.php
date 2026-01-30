<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: General information tab &gt; Financial settings section &gt; Customer class* &gt;
 * The class to which the customer is assigned.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerClassInCustomerDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerClassInCustomerDtoFactory testFactory()
 */
class CustomerClassInCustomerDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
