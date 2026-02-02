<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SalesPersonIdinCustomerCreditNoteUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SalesPersonIdinCustomerCreditNoteUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->numberBetween(1, 100),
        ];
    }

    protected function modelClass(): string
    {
        return SalesPersonIdinCustomerCreditNoteUpdateDto::class;
    }
}
