<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\BranchInCustomerDocumentDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class BranchInCustomerDocumentDtoFactory extends Factory
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
        return BranchInCustomerDocumentDto::class;
    }
}
