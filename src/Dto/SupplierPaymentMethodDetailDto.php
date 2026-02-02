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
        public ?string $paymentMethodDetailDescription = null,
        public ?string $paymentMethodDetailValue = null,
        public ?string $paymentMethodDetailBankingDetailType = null,
        #[MapName('paymentMethodDetailID')]
        public ?string $paymentMethodDetailId = null,
    ) {}
}
