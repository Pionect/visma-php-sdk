<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a Location in LocationController. Used for getting data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SupplierLocationDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierLocationDtoFactory testFactory()
 */
class SupplierLocationDto extends Model
{
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
