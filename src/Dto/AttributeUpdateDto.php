<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\AttributeUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\AttributeUpdateDtoFactory factory()
 */
class AttributeUpdateDto extends Model
{
    public function __construct(
        #[MapName('attributeID'), WithTransformer(ValueWrapperTransformer::class)]
        public ?string $attributeId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $description = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $internal = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $controlType = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $entryMask = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $regExp = null,
        public ?array $details = null,
    ) {}
}
