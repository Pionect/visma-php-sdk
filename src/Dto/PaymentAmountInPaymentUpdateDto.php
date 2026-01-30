<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The top part &gt; Payment amount &gt; The total of the documents to which payment is to be applied.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PaymentAmountInPaymentUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PaymentAmountInPaymentUpdateDtoFactory testFactory()
 */
class PaymentAmountInPaymentUpdateDto extends Model
{
    public function __construct(
        public int|float|null $value = null,
    ) {}
}
