<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\VatRegistrationIdInPurchaseOrderUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class VatRegistrationIdInPurchaseOrderUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return VatRegistrationIdInPurchaseOrderUpdateDto::class;
    }
}
