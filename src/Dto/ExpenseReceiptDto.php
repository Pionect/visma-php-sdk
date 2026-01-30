<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a Expense Receipt in ExpenseReceiptController. Used by getting data.
 *
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ExpenseReceiptDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ExpenseReceiptDtoFactory factory()
 */
class ExpenseReceiptDto extends Model
{
    public function __construct(
        public ?int $internalId = null,
        public ?string $receiptId = null,
        public ?\Carbon\Carbon $date = null,
        public int|float|null $taxTotal = null,
        public ?CurrencyInExpenseReceiptDto $currency = null,
        public ?string $refNbr = null,
        public ?InventoryNumberDescriptionDto $inventory = null,
        public ?string $description = null,
        public ?string $uom = null,
        public int|float|null $quantity = null,
        public int|float|null $unitCost = null,
        public int|float|null $totalAmount = null,
        public int|float|null $employeePart = null,
        public int|float|null $claimAmount = null,
        public ?string $status = null,
        public ?ClaimedByInExpenseReceiptDto $claimedBy = null,
        public ?BranchInExpenseReceiptDto $branch = null,
        public ?ExpenseClaimInExpenseReceiptDto $expenseClaim = null,
        public ?bool $invoiceable = null,
        public ?ProjectInExpenseReceiptDto $project = null,
        public ?ProjectTaskInExpenseReceiptDto $projectTask = null,
        public ?CustomerInExpenseReceiptDto $customer = null,
        public ?LocationInExpenseReceiptDto $location = null,
        public ?ExpenseAccountInExpenseReceiptDto $expenseAccount = null,
        public ?ExpenseSubInExpenseReceiptDto $expenseSub = null,
        public ?SalesAccountInExpenseReceiptDto $salesAccount = null,
        public ?SalesSubInExpenseReceiptDto $salesSub = null,
        public ?TaxCategoryInExpenseReceiptDto $taxCategory = null,
        public ?ImageInExpenseReceiptDto $image = null,
        public ?string $timeStamp = null,
    ) {}
}
