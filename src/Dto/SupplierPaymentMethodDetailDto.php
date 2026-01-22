<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a Payment Method Detail in SupplierController. Used to get data for
 * SupplierPaymentMethodDetails of a Supplier.
 */
class SupplierPaymentMethodDetailDto extends Model
{
    /** The description of the payment method detail. */
    #[Property]
    public ?string $paymentMethodDetailDescription;

    /** The ID of the payment method detail. */
    #[Property]
    public ?string $paymentMethodDetailValue;

    /** Payment method banking detail type */
    #[Property]
    public ?string $paymentMethodDetailBankingDetailType;

    /** payment method detail ID */
    #[Property]
    public ?string $paymentMethodDetailId;
}
