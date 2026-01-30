<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerPaymentMethodCreateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerPaymentMethodCreateDtoFactory factory()
 */
class CustomerPaymentMethodCreateDto extends Model
{
    public function __construct(
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $customerId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $paymentMethodId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?bool $active = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $cashAccountId = null,
        public ?array $paymentMethodDetails = null,
    ) {}
}
