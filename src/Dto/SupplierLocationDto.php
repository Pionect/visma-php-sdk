<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a Location in LocationController. Used for getting data.
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierLocationDtoFactory testFactory()
 */
class SupplierLocationDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\SupplierLocationDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?BaccountInSupplierLocationDto $baccount = null,
        /**
         * Mandatory field: The top part > Location ID* > The identifier of the
         * location. Click the magnifier.
         */
        public ?string $locationId = null,
        /**
         * The top part > Location name > A descriptive name to help users recognize the
         * location.
         */
        public ?string $locationName = null,
        /**
         * The top part > Active > A check box that you select if the location is
         * active.
         */
        public ?bool $active = null,
        public ?AddressInSupplierLocationDto $address = null,
        public ?ContactInSupplierLocationDto $contact = null,
        /**
         * General information tab > Location address section > VAT registration ID >
         * The optional VAT registration ID associated with the location.
         */
        public ?string $vatRegistrationId = null,
        public ?VatZoneInSupplierLocationDto $vatZone = null,
        /**
         * General information tab > Location address section > EDI code > The EDI code
         * to be used for the customer location.
         */
        public ?string $ediCode = null,
        /**
         * General information tab > Location address section > GLN > The GLN to be used
         * for the customer location.
         */
        public ?string $gln = null,
        /**
         * General information tab > Location address section > Corporate ID > The
         * corporate ID associated with the customer location.
         */
        public ?string $corporateId = null,
        /** System generation information */
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        /**
         * @var SupplierPaymentMethodDetailDto[]|null
         *                                            Supplier payment method details from the supplier location page.
         */
        public ?array $supplierPaymentMethodDetails = null,
        /**
         * Identifier that represents a specific version of the resource.
         * It helps to prevent simultaneous updates of the resource from overwriting
         * each other (by using ETags and If-Match headers)
         */
        public ?string $timeStamp = null,
        public ?string $errorInfo = null,
    ) {}
}
