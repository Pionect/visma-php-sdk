<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * The Financial details tab &gt; Payment method &gt; The payment method used for the payment.
 *
 * @method static \Pionect\VismaSdk\Factories\PaymentMethodInSupplierDocumentDtoFactory testFactory()
 */
class PaymentMethodInSupplierDocumentDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
