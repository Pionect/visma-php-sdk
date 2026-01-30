<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SalesInvoiceContactUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SalesInvoiceContactUpdateDtoFactory factory()
 */
class SalesInvoiceContactUpdateDto extends Model
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
    public ?string $phone1;
}
