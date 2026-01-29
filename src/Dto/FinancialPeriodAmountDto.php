<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\FinancialPeriodAmountDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\FinancialPeriodAmountDtoFactory factory()
 */
class FinancialPeriodAmountDto extends Model
{
    #[Property]
    public ?string $periodId;

    #[Property]
    public ?float $amount;
}
