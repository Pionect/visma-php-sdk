<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\FinancialPeriodAmountDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\FinancialPeriodAmountDtoFactory factory()
 */
class FinancialPeriodAmountDto extends Model
{
    public function __construct(
        public ?string $periodId = null,
        public int|float|null $amount = null,
    ) {}
}
