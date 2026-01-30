<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Financial Details
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\FinancialDetailsInPaymentDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\FinancialDetailsInPaymentDtoFactory testFactory()
 */
class FinancialDetailsInPaymentDto extends Model
{
    public function __construct(
        public ?\Carbon\Carbon $paymentDate = null,
    ) {}
}
