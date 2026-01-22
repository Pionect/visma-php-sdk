<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a Expense Claim in ExpenseClaimController. Used for getting data.
 */
class ExpenseClaimDto extends Model
{
    /** The top part &gt; Ref. no. &gt; The unique reference number of the expense claim document. */
    #[Property]
    public ?string $refNbr;

    /** The top part &gt; Status &gt; The current status of the expense claim: On Hold/Pending Approval/Approved/Rejected/Released. */
    #[Property]
    public ?string $status;

    /** The top part &gt; Approval status &gt; The status of the claim in Approval. */
    #[Property]
    public ?string $approvalStatus;

    /** Mandatory field: The top part &gt; Date* &gt; The date when the claim was entered. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $date;

    /** Mandatory field: The top part &gt; Description &gt; A description of the claim. */
    #[Property]
    public ?string $description;

    #[Property]
    public ?\claimedByInExpenseClaimDto $claimedBy;

    /** The top part &gt; Claim total &gt; The total amount of the claim. */
    #[Property]
    public ?float $claimTotal;

    /** The top part &gt; VAT taxable total &gt; The document total that is subjected to VAT. */
    #[Property]
    public ?float $vatTaxableTotal;

    /** The top part &gt; VAT exempt total &gt; The document total that is exempt from VAT. */
    #[Property]
    public ?float $vatExemptTotal;

    #[Property]
    public ?\customerInExpenseClaimDto $customer;

    /** The top part &gt; Currency &gt; The currency of the claim. */
    #[Property]
    public ?string $currency;

    /** The top part &gt; Approval date &gt; The date when the claim was approved. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $approvalDate;

    #[Property]
    public ?\departmentInExpenseClaimDto $department;

    #[Property]
    public ?\locationInExpenseClaimDto $location;

    /** System generated information: The lastest time the expense claim was modified */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $lastModifiedDateTime;

    /** Expence claim details tab &gt; */
    #[Property]
    public ?array $details;

    /** The top part &gt; Approval status &gt; A text field. */
    #[Property]
    public ?string $approvalStatusText;

    /**
     * Identifier that represents a specific version of the resource.
     * It helps to prevent simultaneous updates of the resource from overwriting each other (by using ETags and If-Match headers)
     */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $timeStamp;

    #[Property]
    public ?string $errorInfo;

    #[Property]
    public ?\MetadataDto $metadata;
}
