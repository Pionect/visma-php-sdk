<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ReleaseCustomerOverdueChargeActionResultDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ReleaseCustomerOverdueChargeActionResultDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'actionId' => $this->faker->uuid(),
            'actionResult' => $this->faker->word(),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return ReleaseCustomerOverdueChargeActionResultDto::class;
    }
}
