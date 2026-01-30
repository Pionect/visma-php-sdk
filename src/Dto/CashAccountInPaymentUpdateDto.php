<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Mandatory field: The top part &gt; Cash account* &gt; The default cash account associated with the
 * payment method.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CashAccountInPaymentUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CashAccountInPaymentUpdateDtoFactory factory()
 */
class CashAccountInPaymentUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
