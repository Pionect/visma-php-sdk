<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\BranchNumberInCustomerDebitNoteLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class BranchNumberInCustomerDebitNoteLineDtoFactory extends Factory
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
        return BranchNumberInCustomerDebitNoteLineDto::class;
    }
}
