<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The financial period to which the transactions recorded in the document should be posted. Use the
 * format YYYYMM.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\FinancialPeriodInCashSaleUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\FinancialPeriodInCashSaleUpdateDtoFactory factory()
 */
class FinancialPeriodInCashSaleUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
