<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DtoValueOfSupplierStatus;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DtoValueOfSupplierStatusFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DtoValueOfSupplierStatus::class;
    }
}
