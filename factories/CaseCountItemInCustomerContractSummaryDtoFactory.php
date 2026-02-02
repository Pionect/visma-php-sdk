<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CaseCountItemInCustomerContractSummaryDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CaseCountItemInCustomerContractSummaryDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'number' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return CaseCountItemInCustomerContractSummaryDto::class;
    }
}
