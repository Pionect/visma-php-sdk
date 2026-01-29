<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\ProjectTransactionLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ProjectTransactionLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'tranId' => $this->faker->numberBetween(1, 1000),
            'date' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'inventoryId' => InventoryIdInProjectTransactionLineDtoFactory::new()->make(),
            'description' => $this->faker->sentence(),
            'uom' => $this->faker->word(),
            'quantity' => $this->faker->randomFloat(2, 0, 1000),
            'unitRate' => $this->faker->randomFloat(2, 0, 1000),
            'amount' => $this->faker->randomFloat(2, 0, 1000),
            'billable' => $this->faker->boolean(),
            'released' => $this->faker->boolean(),
            'allocated' => $this->faker->boolean(),
            'billableQuantity' => $this->faker->randomFloat(2, 0, 1000),
            'financialPeriod' => $this->faker->word(),
            'batchNbr' => $this->faker->word(),
            'useBillableQty' => $this->faker->boolean(),
            'startDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'endDate' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'earningType' => EarningTypeInProjectTransactionLineDtoFactory::new()->make(),
            'overtimeMultiplier' => $this->faker->randomFloat(2, 0, 1000),
            'project' => ProjectInProjectTransactionLineDtoFactory::new()->make(),
            'projectTask' => ProjectTaskInProjectTransactionLineDtoFactory::new()->make(),
            'debitAccount' => DebitAccountInProjectTransactionLineDtoFactory::new()->make(),
            'debitSubaccount' => DebitSubaccountInProjectTransactionLineDtoFactory::new()->make(),
            'creditAccount' => CreditAccountInProjectTransactionLineDtoFactory::new()->make(),
            'creditSubaccount' => CreditSubaccountInProjectTransactionLineDtoFactory::new()->make(),
            'branch' => BranchInProjectTransactionLineDtoFactory::new()->make(),
            'employee' => EmployeeInProjectTransactionLineDtoFactory::new()->make(),
            'customerVendor' => CustomerVendorInProjectTransactionLineDtoFactory::new()->make(),
            'accountGroup' => AccountGroupInProjectTransactionLineDtoFactory::new()->make(),
            'debitAccountGroup' => DebitAccountGroupInProjectTransactionLineDtoFactory::new()->make(),
            'creditAccountGroup' => CreditAccountGroupInProjectTransactionLineDtoFactory::new()->make(),
            'location' => LocationInProjectTransactionLineDtoFactory::new()->make(),
            'note' => $this->faker->word(),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return ProjectTransactionLineDto::class;
    }
}
