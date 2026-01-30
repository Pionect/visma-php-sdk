<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\VisibilityUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\VisibilityUpdateDtoFactory factory()
 */
class VisibilityUpdateDto extends Model
{
    public function __construct(
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $visibleInGl = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $visibleInAp = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $visibleInAr = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $visibleInSo = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $visibleInPo = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $visibleInEa = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $visibleInTa = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $visibleInIn = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $visibleInCa = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $visibleInCr = null,
    ) {}
}
