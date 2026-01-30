<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * This class represents a Location in LocationController. Used to create and update Location.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\LocationUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\LocationUpdateDtoFactory factory()
 */
class LocationUpdateDto extends Model
{
    public function __construct(
        public ?BaccountIdInLocationUpdateDto $baccountId = null,
        public ?LocationIdInLocationUpdateDto $locationId = null,
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
