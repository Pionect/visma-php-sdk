<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * The Top part &gt; Location* &gt; The supplier location associated with the purchase.
 *
 * @method static \Pionect\VismaSdk\Factories\LocationInSupplierInvoiceDtoFactory testFactory()
 */
class LocationInSupplierInvoiceDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** Location*. */
        public ?string $countryId = null,
        /** Click the magnifier > The identifier */
        public ?string $id = null,
        /** Click the magnifier > The displayed name */
        public ?string $name = null,
    ) {}
}
