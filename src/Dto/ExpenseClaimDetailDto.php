<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\TimeCardSummaryApprovalStatusEnum;
use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\ExpenseClaimDetailDtoFactory testFactory()
 */
class ExpenseClaimDetailDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        /**
         * Identifies the expense claim detail id, necessary when updating detail
         * information
         */
        public ?int $claimDetailId = null,
        /** The expense claim line id */
        public ?string $lineId = null,
        /** Mandatory field: Date > The date when the expense was incurred. */
        public ?\Carbon\Carbon $date = null,
        public ?ExpenseItemInExpenseClaimDetailDto $expenseItem = null,
        /** Mandatory field: Description* > A description of the transaction. */
        public ?string $description = null,
        /** Quantity > The quantity of this expense item. */
        public int|float|null $quantity = null,
        /** Mandatory field: UoM > The unit of measure in which the quantity is shown. */
        public ?string $uom = null,
        /** Unit cost > The cost of a unit of the item. */
        public int|float|null $unitCost = null,
        /**
         * Currency > The currency of the expense receipt. However, if you enter a claim
         * line directly, the currency value is read-only and matching the claim
         * currency.
         */
        public ?string $currency = null,
        /**
         * Amount > The total amount paid for the expense item in the specified
         * quantity.
         */
        public int|float|null $totalAmount = null,
        /**
         * Invoicable > A check box that, if selected, indicates that the claim amount
         * is invoiceable to the customer (the total amount minus the employee's part).
         */
        public ?bool $invoiceable = null,
        /**
         * Claim amount > The amount claimed by the employee, which is calculated as the
         * total claim amount minus the employee part.
         */
        public int|float|null $claimAmount = null,
        /**
         * Amount in claim currency > The amount claimed by the employee, which is
         * expressed in the currency of the expense claim.
         */
        public int|float|null $amountInClaimCurr = null,
        public ?ProjectInExpenseClaimDetailDto $project = null,
        public ?ProjectTaskInExpenseClaimDetailDto $projectTask = null,
        public ?ExpenseAccountInExpenseClaimDetailDto $expenseAccount = null,
        public ?ExpenseSubaccountInExpenseClaimDetailDto $expenseSubaccount = null,
        public ?BranchInExpenseClaimDetailDto $branch = null,
        public ?TaxCategoryInExpenseClaimDetailDto $taxCategory = null,
        /** Ref. no. > The identifier of the transaction. */
        public ?string $refNbr = null,
        public ?SalesAccountInExpenseClaimDetailDto $salesAccount = null,
        public ?SalesSubaccountInExpenseClaimDetailDto $salesSubaccount = null,
        /**
         * Employee part > The part of the total amount that will not be paid back to
         * the employee. The percentage depends on the company policy.
         */
        public int|float|null $employeePart = null,
        public ?CustomerInExpenseClaimDetailDto $customer = null,
        public ?LocationInExpenseClaimDetailDto $location = null,
        /** REef.no. customer > The reference number of the customer ledger document. */
        public ?string $arReferenceNbr = null,
        /**
         * Approval status > The approval status, which indicates whether the detail row
         * requires approval and, if it does, what the current state of approval is.
         */
        public ?TimeCardSummaryApprovalStatusEnum $approvalStatus = null,
        /** Last approval comment > The approval status text suitable for display */
        public ?string $approvalStatusText = null,
        /**
         * Pending approver > The identifier of the person authorized to approve the
         * activity, if approval is required. This is either the approver of the project
         * task or, if no approver is assigned to the project task, the project manager.
         */
        public ?string $approver = null,
        /**
         * @var AttachmentDto[]|null
         *                           Expense claim detail line attachtments
         */
        public ?array $attachments = null,
    ) {}
}
