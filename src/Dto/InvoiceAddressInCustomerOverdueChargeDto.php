<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * The Invoice address tab &gt; The Invoice address section.
 */
class InvoiceAddressInCustomerOverdueChargeDto extends Model
{
    #[Property]
    public ?int $addressId;

    /** Address 1 &gt; The first line of the customer's contact address. */
    #[Property]
    public ?string $addressLine1;

    /** Address 2 &gt; The second line of the address. */
    #[Property]
    public ?string $addressLine2;

    /** Address 3 &gt; The third line of the address. */
    #[Property]
    public ?string $addressLine3;

    /** Postcode &gt; The postcode. */
    #[Property]
    public ?string $postalCode;

    /** City &gt; The city. */
    #[Property]
    public ?string $city;

    #[Property]
    public ?countryInCustomerDocumentAddressDto $country;

    #[Property]
    public ?countyInCustomerDocumentAddressDto $county;

    /** Override address &gt; A check box that indicates (if selected) that the invoice address is not the default invoice address of the customer. */
    #[Property]
    public ?bool $overrideAddress;
}
