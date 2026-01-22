<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SellerInCustomerInvoiceLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SellerInCustomerInvoiceLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return SellerInCustomerInvoiceLineDto::class;
    }
}
