<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\PaymentOrdersLinesUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\PaymentOrdersLinesUpdateDtoFactory factory()
 */
class PaymentOrdersLinesUpdateDto extends Model
{
    #[Property]
    public ?string $operation;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $orderType;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $orderNumber;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $appliedToOrder;
}
