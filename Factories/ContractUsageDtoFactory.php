<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\ContractUsageDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ContractUsageDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'contract' => $this->faker->word(),
            'transaction' => [],
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
        ];
    }

    protected function modelClass(): string
    {
        return ContractUsageDto::class;
    }
}
