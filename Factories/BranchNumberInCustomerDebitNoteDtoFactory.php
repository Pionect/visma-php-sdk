<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\BranchNumberInCustomerDebitNoteDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class BranchNumberInCustomerDebitNoteDtoFactory extends Factory
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
        return BranchNumberInCustomerDebitNoteDto::class;
    }
}
