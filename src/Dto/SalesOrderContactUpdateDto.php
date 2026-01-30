<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SalesOrderContactUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SalesOrderContactUpdateDtoFactory factory()
 */
class SalesOrderContactUpdateDto extends Model
{
    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $overrideContact;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $name;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $attention;

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
    public ?string $fax;
}
