<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DiscountBreakpointUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DiscountBreakpointUpdateDtoFactory factory()
 */
class DiscountBreakpointUpdateDto extends Model
{
    #[Property]
    public ?string $operation;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?int $lineNbr;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $pendingBreakAmount;

    #[Property]
    #[DateTime]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?\Carbon\Carbon $pendingDate;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $pendingDiscountPercent;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $pendingDiscountAmount;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $pendingBreakQuantity;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $breakAmount;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $discountAmount;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $discountPercent;
}
