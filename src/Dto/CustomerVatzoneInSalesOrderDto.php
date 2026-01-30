<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Financial settings tab &gt; Financial information section &gt; Customer VAT zone &gt; The customers
 * VAT zone to be used to process customer sales orders, which generally is the zone associated with
 * the customer's delivery address.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerVatzoneInSalesOrderDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerVatzoneInSalesOrderDtoFactory factory()
 */
class CustomerVatzoneInSalesOrderDto extends Model
{
    public function __construct(
        public ?string $id = null,
        public ?string $description = null,
        public ?string $defaultVatCategory = null,
        public ?TaxCategoryNumberDescriptionDto $defaultTaxCategory = null,
        public ?string $errorInfo = null,
    ) {}
}
