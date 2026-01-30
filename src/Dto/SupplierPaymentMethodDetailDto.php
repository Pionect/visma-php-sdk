<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;
use Spatie\LaravelData\Attributes\MapName;

/**
 * This class represents a Payment Method Detail in SupplierController. Used to get data for
 * SupplierPaymentMethodDetails of a Supplier.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\SupplierPaymentMethodDetailDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\SupplierPaymentMethodDetailDtoFactory factory()
 */
class SupplierPaymentMethodDetailDto extends Model
{
    public function __construct(
        public ?string $paymentMethodDetailDescription = null,
        public ?string $paymentMethodDetailValue = null,
        public ?string $paymentMethodDetailBankingDetailType = null,
        #[MapName('paymentMethodDetailID')]
        public ?string $paymentMethodDetailId = null,
    ) {}
}
