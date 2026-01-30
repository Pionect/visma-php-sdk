<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\LedgerDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class LedgerDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'internalId' => $this->faker->numberBetween(1, 1000),
            'number' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'balanceType' => $this->faker->word(),
            'currencyId' => $this->faker->uuid(),
            'consolidationSource' => $this->faker->boolean(),
            'consolBranch' => null,
            'branchAccounting' => $this->faker->boolean(),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'postInterCompany' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return LedgerDto::class;
    }
}
