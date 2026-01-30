<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Financial details tab &gt; Payment method &gt; The payment method used for the payment.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PaymentMethodInSupplierInvoiceDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PaymentMethodInSupplierInvoiceDtoFactory factory()
 */
class PaymentMethodInSupplierInvoiceDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
