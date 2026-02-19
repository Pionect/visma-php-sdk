<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a Payment Method Detail in SupplierController. Used to get data for
 * SupplierPaymentMethodDetails of a Supplier.
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierPaymentMethodDetailDtoFactory testFactory()
 */
class SupplierPaymentMethodDetailDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /** The description of the payment method detail. */
        public ?string $paymentMethodDetailDescription = null,
        /** The ID of the payment method detail. */
        public ?string $paymentMethodDetailValue = null,
        /** Payment method banking detail type */
        public ?string $paymentMethodDetailBankingDetailType = null,
        /** payment method detail ID */
        #[MapName('paymentMethodDetailID')]
        public ?string $paymentMethodDetailId = null,
    ) {}
}
