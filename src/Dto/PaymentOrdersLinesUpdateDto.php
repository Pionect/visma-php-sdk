<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PaymentOrdersLinesUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PaymentOrdersLinesUpdateDtoFactory factory()
 */
class PaymentOrdersLinesUpdateDto extends Model
{
    public function __construct(
        public ?string $operation = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $orderType = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $orderNumber = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public int|float|null $appliedToOrder = null,
    ) {}
}
