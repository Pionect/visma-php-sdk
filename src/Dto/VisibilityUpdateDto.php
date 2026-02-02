<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\VisibilityUpdateDtoFactory testFactory()
 */
class VisibilityUpdateDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

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
