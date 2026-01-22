<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SalesPersonInCustomerContractSummaryDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SalesPersonInCustomerContractSummaryDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return SalesPersonInCustomerContractSummaryDto::class;
    }
}
