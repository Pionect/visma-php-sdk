<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\FinancialPeriodQueryParametersFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\FinancialPeriodQueryParametersFactory factory()
 */
class FinancialPeriodQueryParameters extends Model
{
    /** Enter the year or year-period lower than the first period or year you want, format YYYY or YYYYPP */
    #[Property]
    public ?string $greaterThanValue;
}
