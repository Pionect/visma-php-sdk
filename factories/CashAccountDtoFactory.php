<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\CashAccountDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CashAccountDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'entryTypes' => [],
            'currency' => $this->faker->word(),
            'account' => null,
            'subaccount' => null,
            'number' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return CashAccountDto::class;
    }
}
