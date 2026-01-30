<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustSalesPeopleQueryParametersFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustSalesPeopleQueryParametersFactory testFactory()
 */
class CustSalesPeopleQueryParameters extends Model
{
    public function __construct(
        public ?int $pageNumber = null,
        public ?int $pageSize = null,
    ) {}
}
