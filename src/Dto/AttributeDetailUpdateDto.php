<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\AttributeDetailUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\AttributeDetailUpdateDtoFactory factory()
 */
class AttributeDetailUpdateDto extends Model
{
    public function __construct(
        public ?string $operation = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $valueId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $description = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?int $sortOrder = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $disabled = null,
    ) {}
}
