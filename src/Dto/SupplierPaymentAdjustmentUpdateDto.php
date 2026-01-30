<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SupplierPaymentAdjustmentUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierPaymentAdjustmentUpdateDtoFactory factory()
 */
class SupplierPaymentAdjustmentUpdateDto extends Model
{
    #[Property]
    public ?string $operation;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $documentType;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $refNbr;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $amountPaid;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $cashDiscountTaken;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?float $crossRate;
}
