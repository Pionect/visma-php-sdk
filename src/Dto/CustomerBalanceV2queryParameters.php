<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Query parameters for Customers Balance - version 2
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerBalanceV2queryParametersFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerBalanceV2queryParametersFactory testFactory()
 */
class CustomerBalanceV2queryParameters extends Model
{
    public function __construct(
        public ?string $branchNumber = null,
        public ?string $customer = null,
        public ?string $fromFinPeriod = null,
        public ?string $toFinPeriod = null,
        public ?int $pageNumber = null,
        public ?int $pageSize = null,
    ) {}
}
