<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * This class represent a Discount Detail for Purchase Order in Purchase Order Controller. Used to pass
 * data to server for creating or updating an order
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\DiscountDetailUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\DiscountDetailUpdateDtoFactory testFactory()
 */
class DiscountDetailUpdateDto extends Model
{
    public function __construct(
        public ?string $operation = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?int $lineNbr = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $skipDiscount = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $discountCode = null,
        #[MapName('sequanceID'), WithTransformer(ValueWrapperTransformer::class)]
        public ?string $sequanceId = null,
    ) {}
}
