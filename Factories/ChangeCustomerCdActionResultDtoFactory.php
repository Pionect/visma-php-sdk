<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ChangeCustomerCdActionResultDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ChangeCustomerCdActionResultDtoFactory extends Factory
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
        return ChangeCustomerCdActionResultDto::class;
    }
}
