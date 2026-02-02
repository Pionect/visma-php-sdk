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
        public ?string $locationId = null,
        public ?string $locationName = null,
        public ?bool $active = null,
        public ?AddressInLocationDto $address = null,
        public ?ContactInLocationDto $contact = null,
        public ?string $vatRegistrationId = null,
        public ?VatZoneInLocationDto $vatZone = null,
        public ?string $ediCode = null,
        public ?string $gln = null,
        public ?string $corporateId = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?PeppolSchemeInLocationDto $peppolScheme = null,
        public ?int $internalId = null,
        public ?string $errorInfo = null,
    ) {}
}
