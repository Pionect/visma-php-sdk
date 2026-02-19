<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\FinancialPeriodQueryParametersFactory testFactory()
 */
class FinancialPeriodQueryParameters extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /**
         * Enter the year or year-period lower than the first period or year you want,
         * format YYYY or YYYYPP
         */
        public ?string $greaterThanValue = null,
    ) {}
}
