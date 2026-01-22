<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\PaymentMethodInSupplierDocumentDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class PaymentMethodInSupplierDocumentDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return PaymentMethodInSupplierDocumentDto::class;
    }
}
