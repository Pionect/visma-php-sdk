<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\AccountNumberDescriptionDto;
use Pionect\VismaSdk\Enums\AccountTypeEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class AccountNumberDescriptionDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'type' => $this->faker->randomElement(AccountTypeEnum::cases()),
            'externalCode1' => $this->faker->word(),
            'externalCode2' => $this->faker->word(),
            'externalCode1info' => ExternalCodeNumberDescriptionDtoFactory::new()->make(),
            'externalCode2info' => ExternalCodeNumberDescriptionDtoFactory::new()->make(),
            'glConsolAccountCd' => $this->faker->word(),
            'number' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return AccountNumberDescriptionDto::class;
    }
}
