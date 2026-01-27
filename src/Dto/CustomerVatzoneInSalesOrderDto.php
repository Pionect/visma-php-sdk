<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * Financial settings tab &gt; Financial information section &gt; Customer VAT zone &gt; The customers
 * VAT zone to be used to process customer sales orders, which generally is the zone associated with
 * the customer's delivery address.
 */
class CustomerVatzoneInSalesOrderDto extends Model
{
    /** Click the magnifier. The identifier for the VAT zone of the supplier, which is specified in the  AP303000 window. */
    #[Property]
    public ?string $id;

    /** Click the magnifier. The description for the VAT zone of the supplier, which is specified in the  AP303000 window. */
    #[Property]
    public ?string $description;

    /** Click the magnifier. The Default VAT category for the VAT zone of the supplier, which is specified in the  AP303000 window. */
    #[Property]
    public ?string $defaultVatCategory;

    #[Property]
    public ?\TaxCategoryNumberDescriptionDto $defaultTaxCategory;

    #[Property]
    public ?string $errorInfo;
}
