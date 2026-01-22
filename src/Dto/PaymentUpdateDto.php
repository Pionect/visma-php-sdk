<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class PaymentUpdateDto extends Model
{
    #[Property]
    public ?\referenceNumberInPaymentUpdateDto $referenceNumber;

    #[Property]
    public ?\holdInPaymentUpdateDto $hold;

    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $applicationDate;

    #[Property]
    public ?\applicationPeriodInPaymentUpdateDto $applicationPeriod;

    #[Property]
    public ?\paymentRefInPaymentUpdateDto $paymentRef;

    #[Property]
    public ?\customerInPaymentUpdateDto $customer;

    #[Property]
    public ?\locationInPaymentUpdateDto $location;

    #[Property]
    public ?\paymentMethodInPaymentUpdateDto $paymentMethod;

    #[Property]
    public ?\cashAccountInPaymentUpdateDto $cashAccount;

    #[Property]
    public ?\currencyInPaymentUpdateDto $currency;

    #[Property]
    public ?\paymentAmountInPaymentUpdateDto $paymentAmount;

    #[Property]
    public ?\invoiceTextInPaymentUpdateDto $invoiceText;

    #[Property]
    public ?\DtoValueOfString $branch;

    #[Property]
    public ?\DtoValueOfBoolean $overrideNumberSeries;

    /** The top part &gt; Applied to orders &gt; The total of the orders for which payment is reserved, minus the amount transferred to invoice. */
    #[Property]
    public ?array $ordersToApply;

    /** Financial Charges */
    #[Property]
    public ?array $financeCharges;

    #[Property]
    public ?array $paymentLines;
}
