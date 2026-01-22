<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SupplierClassInSupplierDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SupplierClassInSupplierDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return SupplierClassInSupplierDto::class;
    }
}
