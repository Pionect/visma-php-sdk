<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerBalanceDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerBalanceDtoFactory factory()
 */
class CustomerBalanceDto extends Model
{
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
