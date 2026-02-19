<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\AccountDto;
use Pionect\VismaSdk\Enums\AccountTypeEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class AccountDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'accountId' => $this->faker->numberBetween(1, 1000),
            'accountCd' => $this->faker->word(),
            'accountGroupCd' => $this->faker->word(),
            'accountClass' => $this->faker->word(),
            'type' => $this->faker->randomElement(AccountTypeEnum::cases()),
            'active' => $this->faker->boolean(),
            'description' => $this->faker->sentence(),
            'accountClassDescription' => $this->faker->sentence(),
            'useDefaultSub' => $this->faker->boolean(),
            'postOption' => $this->faker->word(),
            'currency' => $this->faker->word(),
            'taxCategory' => $this->faker->word(),
            'cashAccount' => $this->faker->boolean(),
            'publicCode1' => $this->faker->word(),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'externalCode1info' => null,
            'externalCode2info' => null,
            'analisysCodeInfo' => null,
            'controlAccountModule' => $this->faker->word(),
            'allowManualEntry' => $this->faker->boolean(),
            'timeStamp' => $this->faker->word(),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return AccountDto::class;
    }
}
