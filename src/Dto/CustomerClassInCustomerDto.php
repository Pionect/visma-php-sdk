<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: General information tab &gt; Financial settings section &gt; Customer class* &gt;
 * The class to which the customer is assigned.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerClassInCustomerDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerClassInCustomerDtoFactory factory()
 */
class CustomerClassInCustomerDto extends Model
{
    /** Click on the magnifier. &gt; The identifier. */
    #[Property]
    public ?string $id;

    /** Click on the magnifier. &gt; The description. */
    #[Property]
    public ?string $description;
}
