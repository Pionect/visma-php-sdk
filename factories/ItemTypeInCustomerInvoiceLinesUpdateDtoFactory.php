<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ItemTypeInCustomerInvoiceLinesUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ItemTypeInCustomerInvoiceLinesUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return ItemTypeInCustomerInvoiceLinesUpdateDto::class;
    }
}
