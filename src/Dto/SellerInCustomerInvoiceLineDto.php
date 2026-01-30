<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Salesperson ID &gt; The identifier of the salesperson involved.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SellerInCustomerInvoiceLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SellerInCustomerInvoiceLineDtoFactory testFactory()
 */
class SellerInCustomerInvoiceLineDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
