<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents an Financial Details in Payments
 *
 * @method static \Pionect\VismaSdk\Factories\PaymentFinancialDetailsDtoFactory testFactory()
 */
class PaymentFinancialDetailsDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?\Carbon\Carbon $paymentDate = null,
    ) {}
}
