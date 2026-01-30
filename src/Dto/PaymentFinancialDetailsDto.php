<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents an Financial Details in Payments
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PaymentFinancialDetailsDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PaymentFinancialDetailsDtoFactory factory()
 */
class PaymentFinancialDetailsDto extends Model
{
    public function __construct(
        public ?\Carbon\Carbon $paymentDate = null,
    ) {}
}
