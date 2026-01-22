<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\FixedAssetTransactionAccountsDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class FixedAssetTransactionAccountsDtoFactory extends Factory
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
        return FixedAssetTransactionAccountsDto::class;
    }
}
