<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SupplierAccountInSupplierGlAccountsDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SupplierAccountInSupplierGlAccountsDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'type' => $this->faker->word(),
            'number' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return SupplierAccountInSupplierGlAccountsDto::class;
    }
}
