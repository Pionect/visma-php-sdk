<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class CashTransactionDto extends Model
{
    /** The top part &gt; Trans type &gt; 	The type of cash transaction. */
    #[Property]
    public ?string $tranType;

    /** The top part &gt; Ref. no. &gt; The unique identifier assigned to the cash transaction in accordance with the numbering sequence. */
    #[Property]
    public ?string $referenceNbr;

    /** The top part &gt; Status &gt; The status of the transaction, which is automatically assigned by the system. */
    #[Property]
    public ?string $status;

    /** The top part &gt; Hold &gt; A check box that, if selected, indicates that the transaction is on hold, which means it may be edited but cannot be released. */
    #[Property]
    public ?bool $hold;

    /** Mandatory field: The top part &gt; Trans. date* &gt; The date of the transaction. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $tranDate;

    /** The property is now considered obsolete. Use Financial Period instead */
    #[Property]
    public ?string $finPeriod;

    /** Mandatory field: The top part &gt; Period* &gt; The financial period to which the transaction should be posted. */
    #[Property]
    public ?string $financialPeriod;

    #[Property]
    public ?cashAccountInCashTransactionDto $cashAccount;

    /** The top part &gt; Currency &gt; The currency of the cash account. */
    #[Property]
    public ?string $currency;

    #[Property]
    public ?entryTypeInCashTransactionDto $entryType;

    /** The top part &gt; Disb./receipt &gt; The basic type of the transaction. */
    #[Property]
    public ?string $disbReceipt;

    /** The top part &gt; Document ref. &gt; The external document reference number. */
    #[Property]
    public ?string $documentRef;

    #[Property]
    public ?ownerInCashTransactionDto $owner;

    /** The top part &gt; Description &gt; A detailed description of the transaction. */
    #[Property]
    public ?string $description;

    /** The top part &gt; Amount &gt; The amount of the transaction. */
    #[Property]
    public ?float $amount;

    /** The top part &gt; VAT taxable total &gt; The document total that is subjected to VAT. */
    #[Property]
    public ?float $vatTaxableTotal;

    /** The top part &gt; VAT exempt total &gt;  The document total that is exempt from VAT. */
    #[Property]
    public ?float $vatExemptTotal;

    /** The top part &gt; VAT total &gt; The total amount of tax paid in the document. */
    #[Property]
    public ?float $taxTotal;

    /** Mandatory field: The top part &gt; Control total &gt; The control total of the transaction. */
    #[Property]
    public ?float $controlTotal;

    /** The top part &gt; VAT amount &gt; The VAT amount to be paid for the document. A user enters this amount manually. */
    #[Property]
    public ?float $taxAmount;

    /** System generated information. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $lastModifiedDateTime;

    /** Transaction details tab &gt; */
    #[Property]
    public ?array $transactionDetails;

    /** VAT details tab &gt; */
    #[Property]
    public ?array $taxDetails;

    #[Property]
    public ?financialsDetailInCashTransactionDto $financialsDetail;

    /**
     * Identifier that represents a specific version of the resource.
     * It helps to prevent simultaneous updates of the resource from overwriting each other (by using ETags and If-Match headers)
     */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $timeStamp;
}
