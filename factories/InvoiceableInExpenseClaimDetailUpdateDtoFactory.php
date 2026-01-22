<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\InvoiceableInExpenseClaimDetailUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class InvoiceableInExpenseClaimDetailUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return InvoiceableInExpenseClaimDetailUpdateDto::class;
    }
}
