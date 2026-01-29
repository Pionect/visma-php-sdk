<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\ExpenseClaimDetailDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ExpenseClaimDetailDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'claimDetailId' => $this->faker->numberBetween(1, 1000),
            'lineId' => $this->faker->uuid(),
            'date' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'expenseItem' => ExpenseItemInExpenseClaimDetailDtoFactory::new()->make(),
            'description' => $this->faker->sentence(),
            'quantity' => $this->faker->randomFloat(2, 0, 1000),
            'uom' => $this->faker->word(),
            'unitCost' => $this->faker->randomFloat(2, 0, 1000),
            'currency' => $this->faker->word(),
            'totalAmount' => $this->faker->randomFloat(2, 0, 1000),
            'invoiceable' => $this->faker->boolean(),
            'claimAmount' => $this->faker->randomFloat(2, 0, 1000),
            'amountInClaimCurr' => $this->faker->randomFloat(2, 0, 1000),
            'project' => ProjectInExpenseClaimDetailDtoFactory::new()->make(),
            'projectTask' => ProjectTaskInExpenseClaimDetailDtoFactory::new()->make(),
            'expenseAccount' => ExpenseAccountInExpenseClaimDetailDtoFactory::new()->make(),
            'expenseSubaccount' => ExpenseSubaccountInExpenseClaimDetailDtoFactory::new()->make(),
            'branch' => BranchInExpenseClaimDetailDtoFactory::new()->make(),
            'taxCategory' => TaxCategoryInExpenseClaimDetailDtoFactory::new()->make(),
            'refNbr' => $this->faker->word(),
            'salesAccount' => SalesAccountInExpenseClaimDetailDtoFactory::new()->make(),
            'salesSubaccount' => SalesSubaccountInExpenseClaimDetailDtoFactory::new()->make(),
            'employeePart' => $this->faker->randomFloat(2, 0, 1000),
            'customer' => CustomerInExpenseClaimDetailDtoFactory::new()->make(),
            'location' => LocationInExpenseClaimDetailDtoFactory::new()->make(),
            'arReferenceNbr' => $this->faker->word(),
            'approvalStatus' => $this->faker->word(),
            'approvalStatusText' => $this->faker->word(),
            'approver' => $this->faker->word(),
            'attachments' => [],
        ];
    }

    protected function modelClass(): string
    {
        return ExpenseClaimDetailDto::class;
    }
}
