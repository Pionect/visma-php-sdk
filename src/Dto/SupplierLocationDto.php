<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a Location in LocationController. Used for getting data.
 */
class SupplierLocationDto extends Model
{
    #[Property]
    public ?\baccountInSupplierLocationDto $baccount;

    /** Mandatory field: The top part &gt; Location ID* &gt; The identifier of the location. Click the magnifier. */
    #[Property]
    public ?string $locationId;

    /** The top part &gt; Location name &gt; A descriptive name to help users recognize the location. */
    #[Property]
    public ?string $locationName;

    /** The top part &gt; Active &gt; A check box that you select if the location is active. */
    #[Property]
    public ?bool $active;

    #[Property]
    public ?\addressInSupplierLocationDto $address;

    #[Property]
    public ?\contactInSupplierLocationDto $contact;

    /** General information tab &gt; Location address section &gt; VAT registration ID &gt; The optional VAT registration ID associated with the location. */
    #[Property]
    public ?string $vatRegistrationId;

    #[Property]
    public ?\vatZoneInSupplierLocationDto $vatZone;

    /** General information tab &gt; Location address section &gt; EDI code &gt; The EDI code to be used for the customer location. */
    #[Property]
    public ?string $ediCode;

    /** General information tab &gt; Location address section &gt; GLN &gt; The GLN to be used for the customer location. */
    #[Property]
    public ?string $gln;

    /** General information tab &gt; Location address section &gt; Corporate ID &gt; The corporate ID associated with the customer location. */
    #[Property]
    public ?string $corporateId;

    /** System generation information */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $lastModifiedDateTime;

    /** Supplier payment method details from the supplier location page. */
    #[Property]
    public ?array $supplierPaymentMethodDetails;

    /**
     * Identifier that represents a specific version of the resource.
     * It helps to prevent simultaneous updates of the resource from overwriting each other (by using ETags and If-Match headers)
     */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $timeStamp;

    #[Property]
    public ?string $errorInfo;
}
