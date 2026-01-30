<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * General information tab &gt; Contact section &gt;
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ContactInEmployeeUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ContactInEmployeeUpdateDtoFactory factory()
 */
class ContactInEmployeeUpdateDto extends Model
{
    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $firstName;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $lastName;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $middleName;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $email;

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
}
