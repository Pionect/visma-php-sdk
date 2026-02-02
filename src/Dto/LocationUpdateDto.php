<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a Location in LocationController. Used to create and update Location.
 *
 * @method static \Pionect\VismaSdk\Factories\LocationUpdateDtoFactory testFactory()
 */
class LocationUpdateDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $baccountId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $locationId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $locationName = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $active = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $addressIsSameAsMain = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\AddressUpdateDto $address = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $contactIsSameAsMain = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\ContactInfoUpdateDto $contact = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $vatRegistrationId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $vatZone = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $ediCode = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $gln = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $corporateId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?\PeppolSchemeUpdateDto $peppolScheme = null,
    ) {}
}
