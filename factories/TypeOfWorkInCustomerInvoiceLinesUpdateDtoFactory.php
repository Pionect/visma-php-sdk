<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\TypeOfWorkInCustomerInvoiceLinesUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class TypeOfWorkInCustomerInvoiceLinesUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return TypeOfWorkInCustomerInvoiceLinesUpdateDto::class;
    }
}
