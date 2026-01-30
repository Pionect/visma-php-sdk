<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\AttributeLineUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\AttributeLineUpdateDtoFactory factory()
 */
class AttributeLineUpdateDto extends Model
{
    #[Property]
    public ?attributeIdInAttributeLineUpdateDto $attributeId;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $attributeValue;
}
