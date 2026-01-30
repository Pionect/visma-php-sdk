<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: The top part &gt; Payment ref.* &gt; A secondary payment reference identifier,
 * which can be a system-generated number or an external reference number entered manually.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PaymentRefInPaymentUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PaymentRefInPaymentUpdateDtoFactory testFactory()
 */
class PaymentRefInPaymentUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
