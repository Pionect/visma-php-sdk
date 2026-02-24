<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\GeneralLedgerPeriodBalanceQueryParameters;
use Pionect\VismaSdk\Enums\GeneralLedgerPeriodBalanceQueryParametersBalanceTypeEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\GeneralLedgerPeriodBalanceQueryParameters>
 */
class GeneralLedgerPeriodBalanceQueryParametersFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'periodId' => $this->faker->uuid(),
            'account' => $this->faker->word(),
            'ledger' => $this->faker->word(),
            'branch' => $this->faker->word(),
            'balanceType' => $this->faker->randomElement(GeneralLedgerPeriodBalanceQueryParametersBalanceTypeEnum::cases()),
            'toggleBalanceSigns' => $this->faker->boolean(),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'excludeYtdaccount' => $this->faker->boolean(),
            'pageNumber' => $this->faker->numberBetween(1, 100),
            'pageSize' => $this->faker->numberBetween(1, 100),
        ];
    }

    protected function modelClass(): string
    {
        return GeneralLedgerPeriodBalanceQueryParameters::class;
    }
}
