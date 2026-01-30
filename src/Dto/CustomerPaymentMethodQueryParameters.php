<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerPaymentMethodQueryParametersFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerPaymentMethodQueryParametersFactory factory()
 */
class CustomerPaymentMethodQueryParameters extends Model
{
    public function __construct(
        public ?int $pageNumber = null,
        public ?int $pageSize = null,
    ) {}
}
