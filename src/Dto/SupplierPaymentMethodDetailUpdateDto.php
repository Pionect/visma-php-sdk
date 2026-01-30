<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * This class represents a Payment Method Detail in SupplierController. Used to update
 * SupplierPaymentMethodDetails when creating or updating a Supplier.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SupplierPaymentMethodDetailUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierPaymentMethodDetailUpdateDtoFactory factory()
 */
class SupplierPaymentMethodDetailUpdateDto extends Model
{
    #[Property]
    public ?string $paymentMethodDetailDescription;

    #[Property]
    #[WithTransformer(ValueWrapperTransformer::class)]
    public ?string $paymentMethodDetailValue;
}
