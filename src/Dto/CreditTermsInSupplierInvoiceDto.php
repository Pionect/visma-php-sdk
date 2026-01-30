<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Top part &gt; Terms &gt; The credit terms associated with the supplier (unavailable for
 * prepayments and debit adjustments)
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CreditTermsInSupplierInvoiceDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CreditTermsInSupplierInvoiceDtoFactory testFactory()
 */
class CreditTermsInSupplierInvoiceDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
