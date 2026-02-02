<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\CustomerBalanceDtoFactory testFactory()
 */
class CustomerBalanceDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?CustomerDescriptionDto $customer = null,
        public int|float|null $balance = null,
        public int|float|null $totalOrder = null,
        public int|float|null $totalLoan = null,
        public int|float|null $totalSalePeriod = null,
        public int|float|null $totalSaleYear = null,
        public int|float|null $totalDiscountPeriod = null,
        public int|float|null $totalDiscountYear = null,
        public ?\Carbon\Carbon $lastModified = null,
    ) {}
}
