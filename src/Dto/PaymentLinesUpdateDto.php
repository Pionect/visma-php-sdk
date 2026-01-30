<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PaymentLinesUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PaymentLinesUpdateDtoFactory testFactory()
 */
class PaymentLinesUpdateDto extends Model
{
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
