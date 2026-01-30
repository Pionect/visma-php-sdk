<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Top part &gt; Supplier* &gt; The identifier of the supplier referred to in the document.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SupplierInSupplierInvoiceDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierInSupplierInvoiceDtoFactory factory()
 */
class SupplierInSupplierInvoiceDto extends Model
{
    public function __construct(
        public ?int $internalId = null,
        public ?string $number = null,
        public ?string $name = null,
    ) {}
}
