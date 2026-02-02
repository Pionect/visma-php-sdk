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
        public ?\Carbon\Carbon $date = null,
        public ?InventoryIdInProjectTransactionLineDto $inventoryId = null,
        public ?string $description = null,
        public ?string $uom = null,
        public int|float|null $quantity = null,
        public int|float|null $unitRate = null,
        public int|float|null $amount = null,
        public ?bool $billable = null,
        public ?bool $released = null,
        public ?bool $allocated = null,
        public int|float|null $billableQuantity = null,
        public ?string $financialPeriod = null,
        public ?string $batchNbr = null,
        public ?bool $useBillableQty = null,
        public ?\Carbon\Carbon $startDate = null,
        public ?\Carbon\Carbon $endDate = null,
        public ?\Carbon\Carbon $lastModifiedDateTime = null,
        public ?EarningTypeInProjectTransactionLineDto $earningType = null,
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
