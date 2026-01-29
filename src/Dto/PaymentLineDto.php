<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class PaymentLineDto extends Model
{
    /** Doc. type &gt; The type of document to which the payment is applied. */
    #[Property]
    public ?string $documentType;

    /** Mandatory field: Ref. no.* &gt; The reference number of the invoice or note to which the payment is applied. */
    #[Property]
    public ?string $refNbr;

    /** Amount paid &gt; The amount to be paid which is displayed in the currency of the document that is selected in the window. */
    #[Property]
    public ?float $amountPaid;

    /** Cash discount taken &gt; The cash discount to be taken. */
    #[Property]
    public ?float $cashDiscountTaken;

    /** Balance write-off &gt; The amount to be written off. */
    #[Property]
    public ?float $balanceWriteOff;

    #[Property]
    public ?writeOffReasonCodeInPaymentLineDto $writeOffReasonCode;

    /** Date &gt; The creation date of the customer ledger document. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $date;

    /** Due date &gt; The due date of the customer ledger document. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $dueDate;

    /** Cash disount date &gt; The date through which the customer can take a cash discount. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $cashDiscountDate;

    /** Balance &gt; The balance of the document after the cash discount is taken and the amount is paid. */
    #[Property]
    public ?float $balance;

    /** Cash discount balance &gt; The unused amount of the cash discount, in case of partial payment. */
    #[Property]
    public ?float $cashDiscountBalance;

    /** Description &gt; A description of the document. */
    #[Property]
    public ?string $description;

    /** Currency &gt; The currency of the customer ledger document. */
    #[Property]
    public ?string $currency;

    /** Post period &gt; The financial period to which the transactions recorded in the document should be posted. Format MMYYYY. */
    #[Property]
    public ?string $postPeriod;

    /** Customer order &gt; A reference to a document of the customer, such as a purchase order number. */
    #[Property]
    public ?string $customerOrder;

    /** Cross rate &gt; A cross rate that you can optionally specify between the currency of the payment and currency of the original document. */
    #[Property]
    public ?float $crossRate;
}
