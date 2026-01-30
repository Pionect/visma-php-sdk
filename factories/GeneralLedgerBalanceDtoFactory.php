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
            'periodToDateDebit' => null,
            'periodToDateCredit' => null,
            'beginningBalance' => null,
            'yearToDateBalance' => null,
            'periodToDateDebitInCurrency' => null,
            'periodToDateCreditInCurrency' => null,
            'beginningBalanceInCurrency' => null,
            'yearToDateBalanceInCurrency' => null,
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
