<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Top part &gt; Location* &gt; The supplier location associated with the purchase.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\LocationInSupplierInvoiceDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\LocationInSupplierInvoiceDtoFactory testFactory()
 */
class LocationInSupplierInvoiceDto extends Model
{
    public function __construct(
        public ?string $countryId = null,
        public ?string $id = null,
        public ?string $name = null,
    ) {}
}
