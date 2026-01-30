<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\AddressUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\AddressUpdateDtoFactory factory()
 */
class AddressUpdateDto extends Model
{
    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $addressLine1;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $addressLine2;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $addressLine3;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $postalCode;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $city;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $countryId;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $county;
}
