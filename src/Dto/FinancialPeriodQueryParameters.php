<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\FinancialPeriodQueryParametersFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\FinancialPeriodQueryParametersFactory factory()
 */
class FinancialPeriodQueryParameters extends Model
{
    public function __construct(
        public ?string $greaterThanValue = null,
    ) {}
}
