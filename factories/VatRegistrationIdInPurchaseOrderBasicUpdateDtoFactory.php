<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\VatRegistrationIdInPurchaseOrderBasicUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class VatRegistrationIdInPurchaseOrderBasicUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return VatRegistrationIdInPurchaseOrderBasicUpdateDto::class;
    }
}
