<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: The top part &gt; Location* &gt; The customer location from which the goods or
 * services have been ordered or, if the sales order is created from an opportunity, the customer
 * location specified for the opportunity.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\LocationInSalesOrderBasicDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\LocationInSalesOrderBasicDtoFactory testFactory()
 */
class LocationInSalesOrderBasicDto extends Model
{
    public function __construct(
        public ?string $countryId = null,
        public ?string $id = null,
        public ?string $name = null,
    ) {}
}
