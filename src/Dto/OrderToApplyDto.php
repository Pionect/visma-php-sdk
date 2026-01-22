<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents an OrderToApply in Payments
 */
class OrderToApplyDto extends Model
{
    /** Mandatory field: Order type* &gt; The order type for which the payment is to be reserved. */
    #[Property]
    public ?string $orderType;

    /** Mandatory field: Order no.* &gt; The reference number of the order for which the payment is reserved. */
    #[Property]
    public ?string $orderNo;

    /** Status &gt; The status of the document, which is assigned automatically. */
    #[Property]
    public ?string $status;

    /** Applied to order &gt; The total amount reserved for the order. */
    #[Property]
    public ?float $appliedToOrder;

    /** Transferred to invoice &gt; The amount that has been applied to invoice. */
    #[Property]
    public ?float $transferredToInvoice;

    /** Date &gt; The creation date of the order. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $date;

    /** Due date &gt; The due date of the order. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $dueDate;

    /** Cash discount date &gt; The date through which the customer can take a cash discount. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $cashDiscountDate;

    /** Balance &gt; The balance of the order after the cash discount is taken and the amount is paid. */
    #[Property]
    public ?float $balance;

    /** Description &gt; A description of the order. */
    #[Property]
    public ?string $description;

    /** Order total &gt; The total amount of the document. */
    #[Property]
    public ?float $orderTotal;

    /** Currency &gt; The currency of the document. */
    #[Property]
    public ?string $currency;

    /** Invoice no. &gt; The reference number of the invoice generated for the order. */
    #[Property]
    public ?string $invoiceNbr;

    /** Invoice date &gt; The date of the invoice. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $invoiceDate;
}
