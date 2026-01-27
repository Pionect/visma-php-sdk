<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class SupplierPaymentDto extends Model
{
    /** The top part &gt; Voucher no. &gt; The unique identifier of the supplier ledger document. */
    #[Property]
    public ?string $documentType;

    /** The top part &gt; Voucher no. &gt; The unique identifier of the supplier ledger document. */
    #[Property]
    public ?string $refNbr;

    /** The top part &gt; Status &gt; The status of the supplier ledger document, which can be one of the following: On Hold, Printed, Open, Reserved, Closed, Voided, Released. */
    #[Property]
    public ?string $status;

    /** The top part &gt; Hold &gt; A check box that means (if selected) that the status of the document is On hold. */
    #[Property]
    public ?bool $hold;

    /** Mandatory field: The top part &gt; Date* &gt; The date when the payment is applied. The default value is the current business date. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $applicationDate;

    /** MAndatory field: The top part &gt; Financial period* &gt; The financial period of payment application. */
    #[Property]
    public ?string $applicationPeriod;

    /** The top part &gt; Payment ref. &gt; A payment reference number. */
    #[Property]
    public ?string $paymentRef;

    #[Property]
    public ?\supplierInSupplierPaymentDto $supplier;

    #[Property]
    public ?\locationInSupplierPaymentDto $location;

    /** Mandatory field: The top part &gt; Payment method* &gt; The payment method associated with the supplier. */
    #[Property]
    public ?string $paymentMethod;

    /** Mandatory field: The top part &gt; Cash account* &gt; The cash account associated with the payment method. */
    #[Property]
    public ?string $cashAccount;

    #[Property]
    public ?\currencyInSupplierPaymentDto $currency;

    /** The top part &gt; Description &gt; A description for the payment. You may use up to 50 alphanumeric characters. */
    #[Property]
    public ?string $description;

    /** The top part &gt; Payment amount &gt; The total payment amount that should be applied to the documents. */
    #[Property]
    public ?float $paymentAmount;

    /** The top part &gt; Finance charges &gt; The total on all finance charges applied to this document. */
    #[Property]
    public ?float $financeCharges;

    /** Balance of the payment remaining to be applied and released. Only released applications will count towards the balance. */
    #[Property]
    public ?float $balance;

    /** The top part &gt; Unapplied balance &gt; The balance that has not been applied. This will be a non-zero value if the payment amount is not equal to a document's total amount. Checks shall always have a zero unapplied balance. */
    #[Property]
    public ?float $unappliedBalance;

    /** The top part &gt; Amount &gt; The amount to be applied on the application date. */
    #[Property]
    public ?float $appliedAmount;

    /** Background information: if this check box is selected, the document has been released. */
    #[Property]
    public ?bool $released;

    /** Background information: The date and time when the document has been last modified. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $lastModifiedDateTime;

    #[Property]
    public ?string $branch;

    #[Property]
    public ?array $paymentLines;

    /**
     * Identifier that represents a specific version of the resource.
     * It helps to prevent simultaneous updates of the resource from overwriting each other (by using ETags and If-Match headers)
     */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $timeStamp;

    #[Property]
    public ?string $errorInfo;
}
