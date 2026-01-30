<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * This class represents a Location in LocationController. Used to create and update Location.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SupplierLocationUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierLocationUpdateDtoFactory factory()
 */
class SupplierLocationUpdateDto extends Model
{
    #[Property]
    public ?baccountIdInSupplierLocationUpdateDto $baccountId;

    #[Property]
    public ?locationIdInSupplierLocationUpdateDto $locationId;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $locationName;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $active;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $addressIsSameAsMain;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?AddressUpdateDto $address;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $contactIsSameAsMain;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?ContactInfoUpdateDto $contact;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $vatRegistrationId;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $vatZone;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $ediCode;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $gln;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $corporateId;
}
