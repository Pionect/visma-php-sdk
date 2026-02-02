<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\OwnerInCustomerContractSummaryDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class OwnerInCustomerContractSummaryDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'internalId' => $this->faker->uuid(),
            'number' => $this->faker->word(),
            'name' => $this->faker->name(),
        ];
    }

    protected function modelClass(): string
    {
        return OwnerInCustomerContractSummaryDto::class;
    }
}
