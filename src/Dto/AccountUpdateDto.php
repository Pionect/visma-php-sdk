<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\AccountUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\AccountUpdateDtoFactory factory()
 */
class AccountUpdateDto extends Model
{
    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $accountCd;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $active;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $accountClass;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $analysisCode;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $currency;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $description;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $extenalCode1;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $externalCode2;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $accountGroupCd;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $postOption;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $publicCode1;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $type;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $useDefaultSub;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $taxCategory;
}
