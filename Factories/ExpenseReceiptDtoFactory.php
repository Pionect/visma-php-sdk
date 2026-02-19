<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\ExpenseReceiptDto;
use Pionect\VismaSdk\Enums\ExpenseReceiptQueryParametersStatusEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ExpenseReceiptDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'internalId' => $this->faker->numberBetween(1, 1000),
            'receiptId' => $this->faker->uuid(),
            'date' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'taxTotal' => null,
            'currency' => null,
            'refNbr' => $this->faker->word(),
            'inventory' => InventoryNumberDescriptionDtoFactory::new()->make(),
            'description' => $this->faker->sentence(),
            'uom' => $this->faker->word(),
            'quantity' => null,
            'unitCost' => null,
            'totalAmount' => null,
            'employeePart' => null,
            'claimAmount' => null,
            'status' => $this->faker->randomElement(ExpenseReceiptQueryParametersStatusEnum::cases()),
            'claimedBy' => null,
            'branch' => null,
            'expenseClaim' => null,
            'invoiceable' => $this->faker->boolean(),
            'project' => null,
            'projectTask' => null,
            'customer' => null,
            'location' => null,
            'expenseAccount' => null,
            'expenseSub' => null,
            'salesAccount' => null,
            'salesSub' => null,
            'taxCategory' => null,
            'image' => null,
            'timeStamp' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return ExpenseReceiptDto::class;
    }
}
