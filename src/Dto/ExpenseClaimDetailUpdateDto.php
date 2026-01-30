<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ExpenseClaimDetailUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ExpenseClaimDetailUpdateDtoFactory testFactory()
 */
class ExpenseClaimDetailUpdateDto extends Model
{
    public function __construct(
        public ?string $operation = null,
        public ?ClaimDetailIdInExpenseClaimDetailUpdateDto $claimDetailId = null,
        public ?DateInExpenseClaimDetailUpdateDto $date = null,
        public ?ExpenseItemInExpenseClaimDetailUpdateDto $expenseItem = null,
        public ?DescriptionInExpenseClaimDetailUpdateDto $description = null,
        public ?QuantityInExpenseClaimDetailUpdateDto $quantity = null,
        public ?UomInExpenseClaimDetailUpdateDto $uom = null,
        public ?UnitCostInExpenseClaimDetailUpdateDto $unitCost = null,
        public ?InvoiceableInExpenseClaimDetailUpdateDto $invoiceable = null,
        public ?ProjectInExpenseClaimDetailUpdateDto $project = null,
        public ?ProjectTaskInExpenseClaimDetailUpdateDto $projectTask = null,
        public ?ExpenseAccountInExpenseClaimDetailUpdateDto $expenseAccount = null,
        public ?array $expenseSubaccount = null,
        public ?BranchInExpenseClaimDetailUpdateDto $branch = null,
        public ?TaxCategoryInExpenseClaimDetailUpdateDto $taxCategory = null,
        public ?RefNbrInExpenseClaimDetailUpdateDto $refNbr = null,
        public ?EmployeePartInExpenseClaimDetailUpdateDto $employeePart = null,
        public ?CustomerInExpenseClaimDetailUpdateDto $customer = null,
        public ?LocationInExpenseClaimDetailUpdateDto $location = null,
    ) {}
}
