<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\ExpenseReceiptDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ExpenseReceiptDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'internalId' => $this->faker->numberBetween(1, 1000),
            'receiptId' => $this->faker->uuid(),
            'date' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'taxTotal' => $this->faker->randomFloat(2, 0, 1000),
            'currency' => CurrencyInExpenseReceiptDtoFactory::new()->make(),
            'refNbr' => $this->faker->word(),
            'inventory' => InventoryNumberDescriptionDtoFactory::new()->make(),
            'description' => $this->faker->sentence(),
            'uom' => $this->faker->word(),
            'quantity' => $this->faker->randomFloat(2, 0, 1000),
            'unitCost' => $this->faker->randomFloat(2, 0, 1000),
            'totalAmount' => $this->faker->randomFloat(2, 0, 1000),
            'employeePart' => $this->faker->randomFloat(2, 0, 1000),
            'claimAmount' => $this->faker->randomFloat(2, 0, 1000),
            'status' => $this->faker->word(),
            'claimedBy' => ClaimedByInExpenseReceiptDtoFactory::new()->make(),
            'branch' => BranchInExpenseReceiptDtoFactory::new()->make(),
            'expenseClaim' => ExpenseClaimInExpenseReceiptDtoFactory::new()->make(),
            'invoiceable' => $this->faker->boolean(),
            'project' => ProjectInExpenseReceiptDtoFactory::new()->make(),
            'projectTask' => ProjectTaskInExpenseReceiptDtoFactory::new()->make(),
            'customer' => CustomerInExpenseReceiptDtoFactory::new()->make(),
            'location' => LocationInExpenseReceiptDtoFactory::new()->make(),
            'expenseAccount' => ExpenseAccountInExpenseReceiptDtoFactory::new()->make(),
            'expenseSub' => ExpenseSubInExpenseReceiptDtoFactory::new()->make(),
            'salesAccount' => SalesAccountInExpenseReceiptDtoFactory::new()->make(),
            'salesSub' => SalesSubInExpenseReceiptDtoFactory::new()->make(),
            'taxCategory' => TaxCategoryInExpenseReceiptDtoFactory::new()->make(),
            'image' => ImageInExpenseReceiptDtoFactory::new()->make(),
            'timeStamp' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
        ];
    }

    protected function modelClass(): string
    {
        return ExpenseReceiptDto::class;
    }
}
