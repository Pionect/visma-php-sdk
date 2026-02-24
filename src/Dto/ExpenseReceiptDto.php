<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Enums\ExpenseReceiptQueryParametersStatusEnum;
use Spatie\LaravelData\Data as SpatieData;

/**
 * This class represents a Expense Receipt in ExpenseReceiptController. Used by getting data.
 *
 * @method static \Pionect\VismaSdk\Factories\ExpenseReceiptDtoFactory testFactory()
 */
class ExpenseReceiptDto extends SpatieData
{
    /** @use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory<\Pionect\VismaSdk\Factories\ExpenseReceiptDtoFactory> */
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $internalId = null,
        /**
         * The top part > Employee > 	The identifier of the employee whose expense
         * receipts you want to manage.
         */
        public ?string $receiptId = null,
        /** Both tabs > Date > The date of the expense receipt. */
        public ?\Carbon\Carbon $date = null,
        /**
         * The top part > VAT total > The total amount of VAT or taxes calculated for
         * the expense receipt.
         */
        public int|float|null $taxTotal = null,
        public ?CurrencyInExpenseReceiptDto $currency = null,
        /**
         * Both tabs > Ref. no. > The reference number, which usually matches the number
         * of the original receipt.
         */
        public ?string $refNbr = null,
        public ?InventoryNumberDescriptionDto $inventory = null,
        /**
         * Open the receipt
         * Mandatory field: Receipt details tab > Expense details section > Description*
         * > The expense description, which is displayed as a link.
         */
        public ?string $description = null,
        /**
         * Receipt details tab > Expense details section > UoM > The unit of measure of
         * the expense item.
         */
        public ?string $uom = null,
        /**
         * Receipt details tab > Expense details section > Quantity > The quantity of
         * the expense item that the employee purchased according to the receipt.
         */
        public int|float|null $quantity = null,
        /**
         * Receipt details tab > Expense details section > Unit cost > The cost of one
         * unit of the expense item.
         */
        public int|float|null $unitCost = null,
        /**
         * Receipt details tab > Expense details section > Amount > The total amount of
         * the receipt (for VAT-inclusive taxes), or the total amount before taxes (for
         * VAT-exclusive taxes).
         */
        public int|float|null $totalAmount = null,
        /**
         * Receipt details tab > Expense details section > Employee part  > The part of
         * the total amount that will not be paid back to the employee.
         */
        public int|float|null $employeePart = null,
        /**
         * Receipt details tab > Expense details section > Expense claim > The expense
         * claim with which the expense receipt is associated.
         */
        public int|float|null $claimAmount = null,
        /**
         * Receipt details tab > Expense details section > Expense claim status > The
         * current status of the associated expense claim, which can be one of the
         * following options: On hold, Pending apporval, Approved, Rejected, Released.
         */
        public ?ExpenseReceiptQueryParametersStatusEnum $status = null,
        public ?ClaimedByInExpenseReceiptDto $claimedBy = null,
        public ?BranchInExpenseReceiptDto $branch = null,
        public ?ExpenseClaimInExpenseReceiptDto $expenseClaim = null,
        /**
         * Receipt details tab > Financial details section > Invoiceable > A check box
         * that indicates (if selected) that the customer should be invoiced for the
         * claim amount.
         */
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
        /**
         * Identifier that represents a specific version of the resource.
         * It helps to prevent simultaneous updates of the resource from overwriting
         * each other (by using ETags and If-Match headers)
         */
        public ?string $timeStamp = null,
    ) {}
}
