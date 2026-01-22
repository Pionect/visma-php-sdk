<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

class ExpenseClaimDetailDto extends Model
{
    /** Identifies the expense claim detail id, necessary when updating detail information */
    #[Property]
    public ?int $claimDetailId;

    /** The expense claim line id */
    #[Property]
    public ?string $lineId;

    /** Mandatory field: Date &gt; The date when the expense was incurred. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $date;

    #[Property]
    public ?\expenseItemInExpenseClaimDetailDto $expenseItem;

    /** Mandatory field: Description* &gt; A description of the transaction. */
    #[Property]
    public ?string $description;

    /** Quantity &gt; The quantity of this expense item. */
    #[Property]
    public ?float $quantity;

    /** Mandatory field: UoM &gt; The unit of measure in which the quantity is shown. */
    #[Property]
    public ?string $uom;

    /** Unit cost &gt; The cost of a unit of the item. */
    #[Property]
    public ?float $unitCost;

    /** Currency &gt; The currency of the expense receipt. However, if you enter a claim line directly, the currency value is read-only and matching the claim currency. */
    #[Property]
    public ?string $currency;

    /** Amount &gt; The total amount paid for the expense item in the specified quantity. */
    #[Property]
    public ?float $totalAmount;

    /** Invoicable &gt; A check box that, if selected, indicates that the claim amount is invoiceable to the customer (the total amount minus the employee's part). */
    #[Property]
    public ?bool $invoiceable;

    /** Claim amount &gt; The amount claimed by the employee, which is calculated as the total claim amount minus the employee part. */
    #[Property]
    public ?float $claimAmount;

    /** Amount in claim currency &gt; The amount claimed by the employee, which is expressed in the currency of the expense claim. */
    #[Property]
    public ?float $amountInClaimCurr;

    #[Property]
    public ?\projectInExpenseClaimDetailDto $project;

    #[Property]
    public ?\projectTaskInExpenseClaimDetailDto $projectTask;

    #[Property]
    public ?\expenseAccountInExpenseClaimDetailDto $expenseAccount;

    #[Property]
    public ?\expenseSubaccountInExpenseClaimDetailDto $expenseSubaccount;

    #[Property]
    public ?\branchInExpenseClaimDetailDto $branch;

    #[Property]
    public ?\taxCategoryInExpenseClaimDetailDto $taxCategory;

    /** Ref. no. &gt; The identifier of the transaction. */
    #[Property]
    public ?string $refNbr;

    #[Property]
    public ?\salesAccountInExpenseClaimDetailDto $salesAccount;

    #[Property]
    public ?\salesSubaccountInExpenseClaimDetailDto $salesSubaccount;

    /** Employee part &gt; The part of the total amount that will not be paid back to the employee. The percentage depends on the company policy. */
    #[Property]
    public ?float $employeePart;

    #[Property]
    public ?\customerInExpenseClaimDetailDto $customer;

    #[Property]
    public ?\locationInExpenseClaimDetailDto $location;

    /** REef.no. customer &gt; The reference number of the customer ledger document. */
    #[Property]
    public ?string $arReferenceNbr;

    /** Approval status &gt; The approval status, which indicates whether the detail row requires approval and, if it does, what the current state of approval is. */
    #[Property]
    public ?string $approvalStatus;

    /** Last approval comment &gt; The approval status text suitable for display */
    #[Property]
    public ?string $approvalStatusText;

    /** Pending approver &gt; The identifier of the person authorized to approve the activity, if approval is required. This is either the approver of the project task or, if no approver is assigned to the project task, the project manager. */
    #[Property]
    public ?string $approver;

    /** Expense claim detail line attachtments */
    #[Property]
    public ?array $attachments;
}
