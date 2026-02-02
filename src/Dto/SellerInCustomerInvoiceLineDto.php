<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Salesperson ID &gt; The identifier of the salesperson involved.
 *
 * @method static \Pionect\VismaSdk\Factories\SellerInCustomerInvoiceLineDtoFactory testFactory()
 */
class SellerInCustomerInvoiceLineDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
    ) {}
}
