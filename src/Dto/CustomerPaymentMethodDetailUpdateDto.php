<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\CustomerPaymentMethodDetailUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\CustomerPaymentMethodDetailUpdateDtoFactory factory()
 */
class CustomerPaymentMethodDetailUpdateDto extends Model
{
    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $detailId;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $value;
}
