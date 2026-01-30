<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
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
    public function __construct(
        public ?string $paymentMethodDetailDescription = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $paymentMethodDetailValue = null,
    ) {}
}
