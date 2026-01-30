<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ContactUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ContactUpdateDtoFactory factory()
 */
class ContactUpdateDto extends Model
{
    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $active;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $title;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $firstName;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $lastName;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $position;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $businessAccount;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $sameAsAccount;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?AddressUpdateDto $address;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $email;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $web;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $phone1;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $phone2;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $phone3;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $fax;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $contactMethod;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $doNotCall;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $doNotFax;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $doNotEmail;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $doNotMail;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $noMassMail;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $noMarketing;
}
