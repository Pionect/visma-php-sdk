<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\AttributeLineUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\AttributeLineUpdateDtoFactory testFactory()
 */
class AttributeLineUpdateDto extends Model
{
    public function __construct(
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $attributeId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $attributeValue = null,
    ) {}
}
