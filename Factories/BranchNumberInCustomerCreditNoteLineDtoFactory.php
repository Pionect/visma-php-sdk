<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\BranchNumberInCustomerCreditNoteLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class BranchNumberInCustomerCreditNoteLineDtoFactory extends Factory
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
        return BranchNumberInCustomerCreditNoteLineDto::class;
    }
}
