<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * The Financial details tab &gt; The Payment information section &gt; Payment method &gt; The
 * identifier for the payment method that the customer will use to pay the document.
 *
 * @method static \Pionect\VismaSdk\Factories\PaymentMethodInCreditNoteDtoFactory testFactory()
 */
class PaymentMethodInCreditNoteDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Click on the magnifier. > The identifier. */
        public ?string $id = null,
        /** Click on the magnifier. > The description. */
        public ?string $description = null,
    ) {}
}
