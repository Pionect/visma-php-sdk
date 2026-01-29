<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ExpenseClaimDetailUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ExpenseClaimDetailUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'operation' => $this->faker->word(),
            'claimDetailId' => ClaimDetailIdInExpenseClaimDetailUpdateDtoFactory::new()->make(),
            'date' => DateInExpenseClaimDetailUpdateDtoFactory::new()->make(),
            'expenseItem' => ExpenseItemInExpenseClaimDetailUpdateDtoFactory::new()->make(),
            'description' => DescriptionInExpenseClaimDetailUpdateDtoFactory::new()->make(),
            'quantity' => QuantityInExpenseClaimDetailUpdateDtoFactory::new()->make(),
            'uom' => UomInExpenseClaimDetailUpdateDtoFactory::new()->make(),
            'unitCost' => UnitCostInExpenseClaimDetailUpdateDtoFactory::new()->make(),
            'invoiceable' => InvoiceableInExpenseClaimDetailUpdateDtoFactory::new()->make(),
            'project' => ProjectInExpenseClaimDetailUpdateDtoFactory::new()->make(),
            'projectTask' => ProjectTaskInExpenseClaimDetailUpdateDtoFactory::new()->make(),
            'expenseAccount' => ExpenseAccountInExpenseClaimDetailUpdateDtoFactory::new()->make(),
            'expenseSubaccount' => [],
            'branch' => BranchInExpenseClaimDetailUpdateDtoFactory::new()->make(),
            'taxCategory' => TaxCategoryInExpenseClaimDetailUpdateDtoFactory::new()->make(),
            'refNbr' => RefNbrInExpenseClaimDetailUpdateDtoFactory::new()->make(),
            'employeePart' => EmployeePartInExpenseClaimDetailUpdateDtoFactory::new()->make(),
            'customer' => CustomerInExpenseClaimDetailUpdateDtoFactory::new()->make(),
            'location' => LocationInExpenseClaimDetailUpdateDtoFactory::new()->make(),
        ];
    }

    protected function modelClass(): string
    {
        return ExpenseClaimDetailUpdateDto::class;
    }
}
