<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\VisibilityUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\VisibilityUpdateDtoFactory factory()
 */
class VisibilityUpdateDto extends Model
{
    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $visibleInGl;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $visibleInAp;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $visibleInAr;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $visibleInSo;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $visibleInPo;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $visibleInEa;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $visibleInTa;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $visibleInIn;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $visibleInCa;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $visibleInCr;
}
