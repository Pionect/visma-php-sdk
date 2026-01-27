<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\WithTransformer;

/**
 * This class represents a Payment Method Detail in SupplierController. Used to update
 * SupplierPaymentMethodDetails when creating or updating a Supplier.
 */
class SupplierPaymentMethodDetailUpdateDto extends Model
{
    #[Property]
    public ?string $paymentMethodDetailDescription;

    #[Property]
    #[WithTransformer(Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer::class)]
    public ?string $paymentMethodDetailValue;
}
