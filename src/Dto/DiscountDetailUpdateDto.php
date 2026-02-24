<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\AttributeDetailUpdateOperationEnum;
use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represent a Discount Detail for Purchase Order in Purchase Order Controller. Used to pass
 * data to server for creating or updating an order
 *
 * @method static \Pionect\VismaSdk\Factories\DiscountDetailUpdateDtoFactory testFactory()
 */
class DiscountDetailUpdateDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\DiscountDetailUpdateDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?AttributeDetailUpdateOperationEnum $operation = null,
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
