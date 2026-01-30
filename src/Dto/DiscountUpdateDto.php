<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DiscountUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DiscountUpdateDtoFactory factory()
 */
class DiscountUpdateDto extends Model
{
    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $discountCode;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $series;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $description;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $discountBy;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $breakBy;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $promotional;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $active;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $prorateDiscount;

    #[Property]
    #[DateTime]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?\Carbon\Carbon $effectiveDate;

    #[Property]
    #[DateTime]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?\Carbon\Carbon $expirationDate;

    #[Property]
    public ?array $discountBreakpoints;
}
