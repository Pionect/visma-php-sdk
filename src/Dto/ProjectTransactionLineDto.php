<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\DateTime;
use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ProjectTransactionLineDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ProjectTransactionLineDtoFactory factory()
 */
class ProjectTransactionLineDto extends Model
{
    #[Property]
    public ?int $tranId;

    /** Date &gt; The date the transaction was created. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $date;

    #[Property]
    public ?inventoryIdInProjectTransactionLineDto $inventoryId;

    /** Description &gt; The description of the transaction. */
    #[Property]
    public ?string $description;

    /** UoM &gt; The unit of measure used to estimate the quantity for the transaction, such as HOUR or BOX. */
    #[Property]
    public ?string $uom;

    /** Quantity &gt; 	The quantity for the transaction, such as the number of service hours provided to the customer. */
    #[Property]
    public ?float $quantity;

    /** Unit rate &gt; The price of the item or the rate of the service. */
    #[Property]
    public ?float $unitRate;

    /** Amount &gt; The amount of the transaction. */
    #[Property]
    public ?float $amount;

    /** Invoiceable &gt; A check box indicating whether the transaction is used in calculating the amount charged to the customer for the project task. */
    #[Property]
    public ?bool $billable;

    /** Released &gt; A check box indicating whether the transaction has been released. */
    #[Property]
    public ?bool $released;

    /** Allocated &gt; A check box that indicates whether the amounts of the transactions were allocated for the project. */
    #[Property]
    public ?bool $allocated;

    /** Qty. that can be invoiced &gt; The total invoiceable quantity for the transactions listed in the table. */
    #[Property]
    public ?float $billableQuantity;

    /** Period &gt; The financial period associated with the transaction. */
    #[Property]
    public ?string $financialPeriod;

    /** Batch no. &gt; The batch number of the transaction in the General ledger workspace. */
    #[Property]
    public ?string $batchNbr;

    /** Use the quantity that can be invoiced in the amount formula &gt; A check box that you select if you want the system to use the invoiceable quantity (the Invoiceable quantity column) instead of the overall quantity (the Quantity column) of the transaction when calculating the amount of transaction. */
    #[Property]
    public ?bool $useBillableQty;

    /** Start date &gt; The start date for this transaction. */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $startDate;

    /** End date &gt; The end date for this transaction */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $endDate;

    /** System generated information */
    #[Property]
    #[DateTime]
    public ?\Carbon\Carbon $lastModifiedDateTime;

    #[Property]
    public ?earningTypeInProjectTransactionLineDto $earningType;

    /** Multiplier &gt; The multiplier by which the unit rate is multiplied when the labour cost is calculated. */
    #[Property]
    public ?float $overtimeMultiplier;

    #[Property]
    public ?projectInProjectTransactionLineDto $project;

    #[Property]
    public ?projectTaskInProjectTransactionLineDto $projectTask;

    #[Property]
    public ?debitAccountInProjectTransactionLineDto $debitAccount;

    #[Property]
    public ?debitSubaccountInProjectTransactionLineDto $debitSubaccount;

    #[Property]
    public ?creditAccountInProjectTransactionLineDto $creditAccount;

    #[Property]
    public ?creditSubaccountInProjectTransactionLineDto $creditSubaccount;

    #[Property]
    public ?branchInProjectTransactionLineDto $branch;

    #[Property]
    public ?employeeInProjectTransactionLineDto $employee;

    #[Property]
    public ?customerVendorInProjectTransactionLineDto $customerVendor;

    #[Property]
    public ?accountGroupInProjectTransactionLineDto $accountGroup;

    #[Property]
    public ?debitAccountGroupInProjectTransactionLineDto $debitAccountGroup;

    #[Property]
    public ?creditAccountGroupInProjectTransactionLineDto $creditAccountGroup;

    #[Property]
    public ?locationInProjectTransactionLineDto $location;

    #[Property]
    public ?string $note;

    #[Property]
    public ?string $errorInfo;
}
