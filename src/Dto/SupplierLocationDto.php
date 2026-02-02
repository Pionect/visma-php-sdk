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
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?BaccountInSupplierLocationDto $baccount = null,
        public ?string $locationId = null,
        public ?string $locationName = null,
        public ?bool $active = null,
        public ?AddressInSupplierLocationDto $address = null,
        public ?ContactInSupplierLocationDto $contact = null,
        public ?string $vatRegistrationId = null,
        public ?VatZoneInSupplierLocationDto $vatZone = null,
        public ?string $ediCode = null,
        public ?string $gln = null,
        public ?string $corporateId = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?array $supplierPaymentMethodDetails = null,
        public ?string $timeStamp = null,
        public ?string $errorInfo = null,
    ) {}
}
