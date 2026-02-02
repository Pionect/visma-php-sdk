<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\LinkLineDtoFactory testFactory()
 */
class LinkLineDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $purchaseType = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $purchaseNumber = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?int $purchaseLineNbr = null,
    ) {}
}
