<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\GeneralLedgerBalanceDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class GeneralLedgerBalanceDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'branch' => BranchNumberDtoFactory::new()->make(),
            'ledger' => LedgerDescriptionDtoFactory::new()->make(),
            'balanceType' => $this->faker->word(),
            'financialPeriod' => $this->faker->word(),
            'account' => AccountNumberDescriptionDtoFactory::new()->make(),
            'subaccountId' => $this->faker->uuid(),
            'subAccountCd' => $this->faker->word(),
            'currencyId' => $this->faker->uuid(),
            'periodToDateDebit' => $this->faker->randomFloat(2, 0, 1000),
            'periodToDateCredit' => $this->faker->randomFloat(2, 0, 1000),
            'beginningBalance' => $this->faker->randomFloat(2, 0, 1000),
            'yearToDateBalance' => $this->faker->randomFloat(2, 0, 1000),
            'periodToDateDebitInCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'periodToDateCreditInCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'beginningBalanceInCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'yearToDateBalanceInCurrency' => $this->faker->randomFloat(2, 0, 1000),
            'yearClosed' => $this->faker->boolean(),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return GeneralLedgerBalanceDto::class;
    }
}
