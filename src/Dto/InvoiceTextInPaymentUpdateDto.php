<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The top part &gt; Invoice text &gt; A user-defined description of the payment.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\InvoiceTextInPaymentUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\InvoiceTextInPaymentUpdateDtoFactory testFactory()
 */
class InvoiceTextInPaymentUpdateDto extends Model
{
    public function __construct(
        public ?string $value = null,
    ) {}
}
