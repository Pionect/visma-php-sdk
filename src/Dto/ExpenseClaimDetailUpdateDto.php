<?php

namespace Pionect\VismaSdk\Dto;

use Pionect\VismaSdk\Foundation\Hydration\Attributes\Property;
use Pionect\VismaSdk\Foundation\Hydration\Model;

/**
 * @extends \Pionect\VismaSdk\Foundation\Hydration\Model<\Pionect\VismaSdk\Factories\ExpenseClaimDetailUpdateDtoFactory>
 *
 * @method static \Pionect\VismaSdk\Factories\ExpenseClaimDetailUpdateDtoFactory factory()
 */
class ExpenseClaimDetailUpdateDto extends Model
{
    #[Property]
    public ?string $operation;

    #[Property]
    public ?claimDetailIdInExpenseClaimDetailUpdateDto $claimDetailId;

    #[Property]
    public ?dateInExpenseClaimDetailUpdateDto $date;

    #[Property]
    public ?expenseItemInExpenseClaimDetailUpdateDto $expenseItem;

    #[Property]
    public ?descriptionInExpenseClaimDetailUpdateDto $description;

    #[Property]
    public ?quantityInExpenseClaimDetailUpdateDto $quantity;

    #[Property]
    public ?uomInExpenseClaimDetailUpdateDto $uom;

    #[Property]
    public ?unitCostInExpenseClaimDetailUpdateDto $unitCost;

    #[Property]
    public ?invoiceableInExpenseClaimDetailUpdateDto $invoiceable;

    #[Property]
    public ?projectInExpenseClaimDetailUpdateDto $project;

    #[Property]
    public ?projectTaskInExpenseClaimDetailUpdateDto $projectTask;

    #[Property]
    public ?expenseAccountInExpenseClaimDetailUpdateDto $expenseAccount;

    /** The corresponding subaccount the system uses to record the part of the expense to be paid back to the employee. */
    #[Property]
    public ?array $expenseSubaccount;

    #[Property]
    public ?branchInExpenseClaimDetailUpdateDto $branch;

    #[Property]
    public ?taxCategoryInExpenseClaimDetailUpdateDto $taxCategory;

    #[Property]
    public ?refNbrInExpenseClaimDetailUpdateDto $refNbr;

    #[Property]
    public ?employeePartInExpenseClaimDetailUpdateDto $employeePart;

    #[Property]
    public ?customerInExpenseClaimDetailUpdateDto $customer;

    #[Property]
    public ?locationInExpenseClaimDetailUpdateDto $location;
}
