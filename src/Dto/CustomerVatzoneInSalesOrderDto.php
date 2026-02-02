<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * Financial settings tab &gt; Financial information section &gt; Customer VAT zone &gt; The customers
 * VAT zone to be used to process customer sales orders, which generally is the zone associated with
 * the customer's delivery address.
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerVatzoneInSalesOrderDtoFactory testFactory()
 */
class CustomerVatzoneInSalesOrderDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
        public ?string $defaultVatCategory = null,
        public ?TaxCategoryNumberDescriptionDto $defaultTaxCategory = null,
        public ?string $errorInfo = null,
    ) {}
}
