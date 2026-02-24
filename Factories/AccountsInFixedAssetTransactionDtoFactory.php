<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\AccountsInFixedAssetTransactionDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\AccountsInFixedAssetTransactionDto>
 */
class AccountsInFixedAssetTransactionDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'debitAccountId' => $this->faker->uuid(),
            'debitSubAccountId' => $this->faker->uuid(),
            'creditAccountId' => $this->faker->uuid(),
            'creditSubAccountId' => $this->faker->uuid(),
        ];
    }

    protected function modelClass(): string
    {
        return AccountsInFixedAssetTransactionDto::class;
    }
}
