<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SellerInCustomerCreditNoteLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SellerInCustomerCreditNoteLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return SellerInCustomerCreditNoteLineDto::class;
    }
}
