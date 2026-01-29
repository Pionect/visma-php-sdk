<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Financial Details
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\FinancialDetailsInPaymentDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\FinancialDetailsInPaymentDtoFactory factory()
 */
class FinancialDetailsInPaymentDto extends Model
{
    /** Financial Details tab &gt; Payment date */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $paymentDate;
}
