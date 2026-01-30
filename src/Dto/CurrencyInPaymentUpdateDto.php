<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The top part &gt; Currency &gt; The currency of the payment document. Once the customer is selected,
 * the system inserts the customer's default currency.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CurrencyInPaymentUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CurrencyInPaymentUpdateDtoFactory testFactory()
 */
class CurrencyInPaymentUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
