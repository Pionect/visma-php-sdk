<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * This class represents a Expense Receipt in ExpenseReceiptController. Used by getting data.
 */
class ExpenseReceiptDto extends Model
{
    #[Property]
    public ?int $internalId;

    /** The top part &gt; Employee &gt; 	The identifier of the employee whose expense receipts you want to manage. */
    #[Property]
    public ?string $receiptId;

    /** Both tabs &gt; Date &gt; The date of the expense receipt. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $date;

    /** The top part &gt; VAT total &gt; The total amount of VAT or taxes calculated for the expense receipt. */
    #[Property]
    public ?float $taxTotal;

    #[Property]
    public ?\currencyInExpenseReceiptDto $currency;

    /** Both tabs &gt; Ref. no. &gt; The reference number, which usually matches the number of the original receipt. */
    #[Property]
    public ?string $refNbr;

    #[Property]
    public ?\InventoryNumberDescriptionDto $inventory;

    /**
     * Open the receipt
     * Mandatory field: Receipt details tab &gt; Expense details section &gt; Description* &gt; The expense description, which is displayed as a link.
     */
    #[Property]
    public ?string $description;

    /** Receipt details tab &gt; Expense details section &gt; UoM &gt; The unit of measure of the expense item. */
    #[Property]
    public ?string $uom;

    /** Receipt details tab &gt; Expense details section &gt; Quantity &gt; The quantity of the expense item that the employee purchased according to the receipt. */
    #[Property]
    public ?float $quantity;

    /** Receipt details tab &gt; Expense details section &gt; Unit cost &gt; The cost of one unit of the expense item. */
    #[Property]
    public ?float $unitCost;

    /** Receipt details tab &gt; Expense details section &gt; Amount &gt; The total amount of the receipt (for VAT-inclusive taxes), or the total amount before taxes (for VAT-exclusive taxes). */
    #[Property]
    public ?float $totalAmount;

    /** Receipt details tab &gt; Expense details section &gt; Employee part  &gt; The part of the total amount that will not be paid back to the employee. */
    #[Property]
    public ?float $employeePart;

    /** Receipt details tab &gt; Expense details section &gt; Expense claim &gt; The expense claim with which the expense receipt is associated. */
    #[Property]
    public ?float $claimAmount;

    /** Receipt details tab &gt; Expense details section &gt; Expense claim status &gt; The current status of the associated expense claim, which can be one of the following options: On hold, Pending apporval, Approved, Rejected, Released. */
    #[Property]
    public ?string $status;

    #[Property]
    public ?\claimedByInExpenseReceiptDto $claimedBy;

    #[Property]
    public ?\branchInExpenseReceiptDto $branch;

    #[Property]
    public ?\expenseClaimInExpenseReceiptDto $expenseClaim;

    /** Receipt details tab &gt; Financial details section &gt; Invoiceable &gt; A check box that indicates (if selected) that the customer should be invoiced for the claim amount. */
    #[Property]
    public ?bool $invoiceable;

    #[Property]
    public ?\projectInExpenseReceiptDto $project;

    #[Property]
    public ?\projectTaskInExpenseReceiptDto $projectTask;

    #[Property]
    public ?\customerInExpenseReceiptDto $customer;

    #[Property]
    public ?\locationInExpenseReceiptDto $location;

    #[Property]
    public ?\expenseAccountInExpenseReceiptDto $expenseAccount;

    #[Property]
    public ?\expenseSubInExpenseReceiptDto $expenseSub;

    #[Property]
    public ?\salesAccountInExpenseReceiptDto $salesAccount;

    #[Property]
    public ?\salesSubInExpenseReceiptDto $salesSub;

    #[Property]
    public ?\taxCategoryInExpenseReceiptDto $taxCategory;

    #[Property]
    public ?\imageInExpenseReceiptDto $image;

    /**
     * Identifier that represents a specific version of the resource.
     * It helps to prevent simultaneous updates of the resource from overwriting each other (by using ETags and If-Match headers)
     */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $timeStamp;
}
