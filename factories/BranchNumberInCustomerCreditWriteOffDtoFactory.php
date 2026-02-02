<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\BranchNumberInCustomerCreditWriteOffDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class BranchNumberInCustomerCreditWriteOffDtoFactory extends Factory
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
        return BranchNumberInCustomerCreditWriteOffDto::class;
    }
}
