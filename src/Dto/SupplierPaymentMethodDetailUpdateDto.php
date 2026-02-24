<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\DataTransferObjects\ValueWrapperTransformer;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a Payment Method Detail in SupplierController. Used to update
 * SupplierPaymentMethodDetails when creating or updating a Supplier.
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierPaymentMethodDetailUpdateDtoFactory testFactory()
 */
class SupplierPaymentMethodDetailUpdateDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\SupplierPaymentMethodDetailUpdateDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?string $paymentMethodDetailDescription = null,
        #[WithTransformer(ValueWrapperTransformer::class)]
        public ?string $paymentMethodDetailValue = null,
    ) {}
}
