<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Mandatory field: The top part &gt; Location* &gt; The customer location from which the goods or
 * services have been ordered or, if the sales order is created from an opportunity, the customer
 * location specified for the opportunity.
 *
 * @method static \Pionect\VismaSdk\Factories\LocationInSalesOrderDtoFactory testFactory()
 */
class LocationInSalesOrderDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $countryId = null,
        public ?string $id = null,
        public ?string $name = null,
    ) {}
}
