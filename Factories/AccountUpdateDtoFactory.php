<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\AccountUpdateDto;
use Pionect\VismaSdk\Enums\AccountTypeEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\AccountUpdateDto>
 */
class AccountUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'accountCd' => $this->faker->word(),
            'active' => $this->faker->boolean(),
            'accountClass' => $this->faker->word(),
            'analysisCode' => $this->faker->word(),
            'currency' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'extenalCode1' => $this->faker->word(),
            'externalCode2' => $this->faker->word(),
            'accountGroupCd' => $this->faker->word(),
            'postOption' => $this->faker->word(),
            'publicCode1' => $this->faker->word(),
            'type' => $this->faker->randomElement(AccountTypeEnum::cases()),
            'useDefaultSub' => $this->faker->boolean(),
            'taxCategory' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return AccountUpdateDto::class;
    }
}
