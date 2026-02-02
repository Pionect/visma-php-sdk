<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ReverseInvoiceActionDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ReverseInvoiceActionDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'returnCreditNote' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return ReverseInvoiceActionDto::class;
    }
}
