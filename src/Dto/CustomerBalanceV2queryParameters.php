<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Query parameters for Customers Balance - version 2
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerBalanceV2queryParametersFactory testFactory()
 */
class CustomerBalanceV2queryParameters extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $branchNumber = null,
        public ?string $customer = null,
        public ?string $fromFinPeriod = null,
        public ?string $toFinPeriod = null,
        public ?int $pageNumber = null,
        public ?int $pageSize = null,
    ) {}
}
