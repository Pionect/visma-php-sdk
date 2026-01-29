<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerBalanceDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerBalanceDtoFactory factory()
 */
class CustomerBalanceDto extends Model
{
    #[Property]
    public ?CustomerDescriptionDto $customer;

    #[Property]
    public ?float $balance;

    #[Property]
    public ?float $totalOrder;

    #[Property]
    public ?float $totalLoan;

    #[Property]
    public ?float $totalSalePeriod;

    #[Property]
    public ?float $totalSaleYear;

    #[Property]
    public ?float $totalDiscountPeriod;

    #[Property]
    public ?float $totalDiscountYear;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $lastModified;
}
