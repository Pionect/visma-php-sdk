<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\AttributeUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\AttributeUpdateDtoFactory factory()
 */
class AttributeUpdateDto extends Model
{
    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $attributeId;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $description;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?bool $internal;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $controlType;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $entryMask;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $regExp;

    #[Property]
    public ?array $details;
}
