<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * The Top part &gt; Terms &gt; The credit terms associated with the supplier (unavailable for
 * prepayments and debit adjustments)
 *
 * @method static \Pionect\VismaSdk\Factories\CreditTermsInSupplierInvoiceDtoFactory testFactory()
 */
class CreditTermsInSupplierInvoiceDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Click on the magnifier. > The identifier. */
        public ?string $id = null,
        /** Click on the magnifier. > The description. */
        public ?string $description = null,
    ) {}
}
