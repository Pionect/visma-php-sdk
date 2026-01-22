<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SupplierContactInSupplierDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SupplierContactInSupplierDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'contactId' => $this->faker->numberBetween(1, 1000),
            'name' => $this->faker->name(),
            'attention' => $this->faker->word(),
            'email' => $this->faker->safeEmail(),
            'web' => $this->faker->word(),
            'phone1' => $this->faker->word(),
            'phone2' => $this->faker->word(),
            'fax' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return SupplierContactInSupplierDto::class;
    }
}
