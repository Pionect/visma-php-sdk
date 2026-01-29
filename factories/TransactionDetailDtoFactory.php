<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\TransactionDetailDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class TransactionDetailDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'lineNumber' => $this->faker->numberBetween(1, 100),
            'branch' => BranchInTransactionDetailDtoFactory::new()->make(),
            'item' => ItemInTransactionDetailDtoFactory::new()->make(),
            'description' => $this->faker->sentence(),
            'quantity' => $this->faker->randomFloat(2, 0, 1000),
            'uom' => $this->faker->word(),
            'price' => $this->faker->randomFloat(2, 0, 1000),
            'amount' => $this->faker->randomFloat(2, 0, 1000),
            'offsetCashAccount' => OffsetCashAccountInTransactionDetailDtoFactory::new()->make(),
            'offsetAccount' => OffsetAccountInTransactionDetailDtoFactory::new()->make(),
            'offsetSubAccount' => OffsetSubAccountInTransactionDetailDtoFactory::new()->make(),
            'taxCategory' => TaxCategoryInTransactionDetailDtoFactory::new()->make(),
            'nonBillable' => $this->faker->boolean(),
            'project' => ProjectInTransactionDetailDtoFactory::new()->make(),
            'projectTask' => ProjectTaskInTransactionDetailDtoFactory::new()->make(),
        ];
    }

    protected function modelClass(): string
    {
        return TransactionDetailDto::class;
    }
}
