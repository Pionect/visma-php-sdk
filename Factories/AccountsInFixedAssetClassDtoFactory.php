<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\AccountsInFixedAssetClassDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\AccountsInFixedAssetClassDto>
 */
class AccountsInFixedAssetClassDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'accountId' => $this->faker->uuid(),
            'subAccountId' => $this->faker->uuid(),
            'accrualAccountId' => $this->faker->uuid(),
            'accrualSubAccountId' => $this->faker->uuid(),
            'accumulatedDepreciationAccountId' => $this->faker->uuid(),
            'accumulatedDepreciationSubAccountId' => $this->faker->uuid(),
            'depreciatedExpenseAccountId' => $this->faker->uuid(),
            'depreciatedExpenseSubAccountId' => $this->faker->uuid(),
            'disposalAccountId' => $this->faker->uuid(),
            'disposalSubAccountId' => $this->faker->uuid(),
            'gainAccountId' => $this->faker->uuid(),
            'gainSubAccountId' => $this->faker->uuid(),
            'lossAccountId' => $this->faker->uuid(),
            'lossSubAccountId' => $this->faker->uuid(),
            'debitAccountId' => $this->faker->uuid(),
            'debitSubAccountId' => $this->faker->uuid(),
            'creditAccountId' => $this->faker->uuid(),
            'creditSubAccountId' => $this->faker->uuid(),
        ];
    }

    protected function modelClass(): string
    {
        return AccountsInFixedAssetClassDto::class;
    }
}
