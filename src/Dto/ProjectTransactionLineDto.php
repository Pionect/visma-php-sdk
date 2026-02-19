<?php

namespace Pionect\VismaSdk\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * @method static \Pionect\VismaSdk\Factories\ProjectTransactionLineDtoFactory testFactory()
 */
class ProjectTransactionLineDto extends SpatieData
{
    use \Pionect\VismaSdk\Foundation\Factories\HasTestFactory;

    public function __construct(
        public ?int $tranId = null,
        /** Date > The date the transaction was created. */
        public ?\Carbon\Carbon $date = null,
        public ?InventoryIdInProjectTransactionLineDto $inventoryId = null,
        /** Description > The description of the transaction. */
        public ?string $description = null,
        /**
         * UoM > The unit of measure used to estimate the quantity for the transaction,
         * such as HOUR or BOX.
         */
        public ?string $uom = null,
        /**
         * Quantity > 	The quantity for the transaction, such as the number of service
         * hours provided to the customer.
         */
        public int|float|null $quantity = null,
        /** Unit rate > The price of the item or the rate of the service. */
        public int|float|null $unitRate = null,
        /** Amount > The amount of the transaction. */
        public int|float|null $amount = null,
        /**
         * Invoiceable > A check box indicating whether the transaction is used in
         * calculating the amount charged to the customer for the project task.
         */
        public ?bool $billable = null,
        /** Released > A check box indicating whether the transaction has been released. */
        public ?bool $released = null,
        /**
         * Allocated > A check box that indicates whether the amounts of the
         * transactions were allocated for the project.
         */
        public ?bool $allocated = null,
        /**
         * Qty. that can be invoiced > The total invoiceable quantity for the
         * transactions listed in the table.
         */
        public int|float|null $billableQuantity = null,
        /** Period > The financial period associated with the transaction. */
        public ?string $financialPeriod = null,
        /**
         * Batch no. > The batch number of the transaction in the General ledger
         * workspace.
         */
        public ?string $batchNbr = null,
        /**
         * Use the quantity that can be invoiced in the amount formula > A check box
         * that you select if you want the system to use the invoiceable quantity (the
         * Invoiceable quantity column) instead of the overall quantity (the Quantity
         * column) of the transaction when calculating the amount of transaction.
         */
        public ?bool $useBillableQty = null,
        /** Start date > The start date for this transaction. */
        public ?\Carbon\Carbon $startDate = null,
        /** End date > The end date for this transaction */
        public ?\Carbon\Carbon $endDate = null,
        /** System generated information */
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?EarningTypeInProjectTransactionLineDto $earningType = null,
        /**
         * Multiplier > The multiplier by which the unit rate is multiplied when the
         * labour cost is calculated.
         */
        public int|float|null $overtimeMultiplier = null,
        public ?ProjectInProjectTransactionLineDto $project = null,
        public ?ProjectTaskInProjectTransactionLineDto $projectTask = null,
        public ?DebitAccountInProjectTransactionLineDto $debitAccount = null,
        public ?DebitSubaccountInProjectTransactionLineDto $debitSubaccount = null,
        public ?CreditAccountInProjectTransactionLineDto $creditAccount = null,
        public ?CreditSubaccountInProjectTransactionLineDto $creditSubaccount = null,
        public ?BranchInProjectTransactionLineDto $branch = null,
        public ?EmployeeInProjectTransactionLineDto $employee = null,
        public ?CustomerVendorInProjectTransactionLineDto $customerVendor = null,
        public ?AccountGroupInProjectTransactionLineDto $accountGroup = null,
        public ?DebitAccountGroupInProjectTransactionLineDto $debitAccountGroup = null,
        public ?CreditAccountGroupInProjectTransactionLineDto $creditAccountGroup = null,
        public ?LocationInProjectTransactionLineDto $location = null,
        public ?string $note = null,
        public ?string $errorInfo = null,
    ) {}
}
