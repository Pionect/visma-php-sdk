<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\PaymentLinesUpdateDtoFactory testFactory()
 */
class PaymentLinesUpdateDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $cashDiscountTaken = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $balanceWriteOff = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $writeOffReasonCode = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $crossRate = null,
        public ?string $operation = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $documentType = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $refNbr = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $amountPaid = null,
    ) {}
}
