<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a Location in LocationController. Used for getting data.
 *
 * @method static \Pionect\VismaSdk\Factories\LocationDtoFactory testFactory()
 */
class LocationDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?BaccountInLocationDto $baccount = null,
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
        public ?AddressInLocationDto $address = null,
        public ?ContactInLocationDto $contact = null,
        /**
         * General information tab > Location address section > VAT registration ID >
         * The optional VAT registration ID associated with the location.
         */
        public ?string $vatRegistrationId = null,
        public ?VatZoneInLocationDto $vatZone = null,
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
        public ?PeppolSchemeInLocationDto $peppolScheme = null,
        public ?int $internalId = null,
        public ?string $errorInfo = null,
    ) {}
}
