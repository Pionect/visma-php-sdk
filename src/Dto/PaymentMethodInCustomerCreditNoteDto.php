<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Financial details tab &gt; The Payment information section &gt; Payment method &gt; The
 * identifier for the payment method that the customer will use to pay the document.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PaymentMethodInCustomerCreditNoteDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PaymentMethodInCustomerCreditNoteDtoFactory factory()
 */
class PaymentMethodInCustomerCreditNoteDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
