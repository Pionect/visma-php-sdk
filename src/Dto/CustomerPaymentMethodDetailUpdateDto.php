<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerPaymentMethodDetailUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerPaymentMethodDetailUpdateDtoFactory factory()
 */
class CustomerPaymentMethodDetailUpdateDto extends Model
{
    public function __construct(
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $detailId = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $value = null,
    ) {}
}
