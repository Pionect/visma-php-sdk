<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PurchaseOrderAddressDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PurchaseOrderAddressDtoFactory factory()
 */
class PurchaseOrderAddressDto extends Model
{
    /** The Supplier info tab &gt; The Supplier address section &gt; Override &gt; A check box that you select to override (that is, to edit ) the default shipping address for the supplier. */
    #[Property]
    public ?bool $overrideAddress;

    #[Property]
    public ?int $addressId;

    /** Address 1 &gt; The first line of the customer's/supplier's/company's/employee's contact address. */
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
    public ?countryInPurchaseOrderAddressDto $country;

    #[Property]
    public ?countyInPurchaseOrderAddressDto $county;
}
