<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerPaymentMethodUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerPaymentMethodUpdateDtoFactory factory()
 */
class CustomerPaymentMethodUpdateDto extends Model
{
    public function __construct(
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $active = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $cashAccountId = null,
        public ?array $paymentMethodDetails = null,
    ) {}
}
