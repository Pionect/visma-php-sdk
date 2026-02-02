<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\BranchNumberInCustomerDocumentDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class BranchNumberInCustomerDocumentDtoFactory extends Factory
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
        return BranchNumberInCustomerDocumentDto::class;
    }
}
