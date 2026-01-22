<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\BranchNumberInCustomerOverdueChargeLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class BranchNumberInCustomerOverdueChargeLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'number' => $this->faker->word(),
            'name' => $this->faker->name(),
        ];
    }

    protected function modelClass(): string
    {
        return BranchNumberInCustomerOverdueChargeLineDto::class;
    }
}
