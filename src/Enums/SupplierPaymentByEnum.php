<?php

namespace Pionect\VismaSdk\Enums;

/**
 * Payment settings tab > Payment settings section > Payment by > An option that
 * defines how to calculate the date when this supplier should be paid.
 */
enum SupplierPaymentByEnum: string
{
    case DUE_DATE = 'DueDate';
    case DISCOUNT_DATE = 'DiscountDate';
}
