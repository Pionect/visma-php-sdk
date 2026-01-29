<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: The top part &gt; Location* &gt; The customer location from which the goods or
 * services have been ordered or, if the sales order is created from an opportunity, the customer
 * location specified for the opportunity.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\LocationInSalesOrderBasicDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\LocationInSalesOrderBasicDtoFactory factory()
 */
class LocationInSalesOrderBasicDto extends Model
{
    /** Location*. */
    #[Property]
    public ?string $countryId;

    /** Click the magnifier &gt; The identifier */
    #[Property]
    public ?string $id;

    /** Click the magnifier &gt; The displayed name */
    #[Property]
    public ?string $name;
}
