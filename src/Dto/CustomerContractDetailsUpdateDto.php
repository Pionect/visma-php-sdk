<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\CustomerContractDetailsUpdateDtoFactory testFactory()
 */
class CustomerContractDetailsUpdateDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $operation = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?int $contractDetailId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $itemCode = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $included = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $setupPrice = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $recurringPrice = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $extraUsagePrice = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $renewalPrice = null,
    ) {}
}
