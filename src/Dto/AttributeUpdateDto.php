<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\AttributeUpdateDtoFactory testFactory()
 */
class AttributeUpdateDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

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
