<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\AccountUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class AccountUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'accountCd' => $this->faker->word(),
            'active' => $this->faker->word(),
            'accountClass' => $this->faker->word(),
            'analysisCode' => $this->faker->word(),
            'currency' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'extenalCode1' => $this->faker->word(),
            'externalCode2' => $this->faker->word(),
            'accountGroupCd' => $this->faker->word(),
            'postOption' => $this->faker->word(),
            'publicCode1' => $this->faker->word(),
            'useDefaultSub' => $this->faker->word(),
            'taxCategory' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return AccountUpdateDto::class;
    }
}
