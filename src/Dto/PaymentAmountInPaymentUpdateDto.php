<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The top part &gt; Payment amount &gt; The total of the documents to which payment is to be applied.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PaymentAmountInPaymentUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PaymentAmountInPaymentUpdateDtoFactory factory()
 */
class PaymentAmountInPaymentUpdateDto extends Model
{
    #[Property]
    public ?float $value;
}
