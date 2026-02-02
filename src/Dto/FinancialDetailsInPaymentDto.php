<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Financial Details
 *
 * @method static \Pionect\VismaSdk\Factories\FinancialDetailsInPaymentDtoFactory testFactory()
 */
class FinancialDetailsInPaymentDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?\Carbon\Carbon $paymentDate = null,
    ) {}
}
