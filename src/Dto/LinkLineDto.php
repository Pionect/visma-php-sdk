<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\LinkLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\LinkLineDtoFactory testFactory()
 */
class LinkLineDto extends Model
{
    public function __construct(
        public ?string $purchaseType = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $purchaseNumber = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?int $purchaseLineNbr = null,
    ) {}
}
