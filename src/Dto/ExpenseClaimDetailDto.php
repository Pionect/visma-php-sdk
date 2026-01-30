<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ExpenseClaimDetailDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ExpenseClaimDetailDtoFactory factory()
 */
class ExpenseClaimDetailDto extends Model
{
    public function __construct(
        public ?int $claimDetailId = null,
        public ?string $lineId = null,
        public ?\Carbon\Carbon $date = null,
        public ?ExpenseItemInExpenseClaimDetailDto $expenseItem = null,
        public ?string $description = null,
        public int|float|null $quantity = null,
        public ?string $uom = null,
        public int|float|null $unitCost = null,
        public ?string $currency = null,
        public int|float|null $totalAmount = null,
        public ?bool $invoiceable = null,
        public int|float|null $claimAmount = null,
        public int|float|null $amountInClaimCurr = null,
        public ?ProjectInExpenseClaimDetailDto $project = null,
        public ?ProjectTaskInExpenseClaimDetailDto $projectTask = null,
        public ?ExpenseAccountInExpenseClaimDetailDto $expenseAccount = null,
        public ?ExpenseSubaccountInExpenseClaimDetailDto $expenseSubaccount = null,
        public ?BranchInExpenseClaimDetailDto $branch = null,
        public ?TaxCategoryInExpenseClaimDetailDto $taxCategory = null,
        public ?string $refNbr = null,
        public ?SalesAccountInExpenseClaimDetailDto $salesAccount = null,
        public ?SalesSubaccountInExpenseClaimDetailDto $salesSubaccount = null,
        public int|float|null $employeePart = null,
        public ?CustomerInExpenseClaimDetailDto $customer = null,
        public ?LocationInExpenseClaimDetailDto $location = null,
        public ?string $arReferenceNbr = null,
        public ?string $approvalStatus = null,
        public ?string $approvalStatusText = null,
        public ?string $approver = null,
        public ?array $attachments = null,
    ) {}
}
