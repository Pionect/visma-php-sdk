<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The document details tab &gt; Salesperson ID &gt; The salesperson involved.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SalesPersonInCustomerInvoiceDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SalesPersonInCustomerInvoiceDtoFactory factory()
 */
class SalesPersonInCustomerInvoiceDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
