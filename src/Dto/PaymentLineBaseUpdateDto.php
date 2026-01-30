<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PaymentLineBaseUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PaymentLineBaseUpdateDtoFactory factory()
 */
class PaymentLineBaseUpdateDto extends Model
{
    public function __construct(
        public ?string $operation = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $documentType = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $refNbr = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $amountPaid = null,
    ) {}
}
