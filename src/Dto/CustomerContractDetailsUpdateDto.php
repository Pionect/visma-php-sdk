<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerContractDetailsUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerContractDetailsUpdateDtoFactory testFactory()
 */
class CustomerContractDetailsUpdateDto extends Model
{
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
