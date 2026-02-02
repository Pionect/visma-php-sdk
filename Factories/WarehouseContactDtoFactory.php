<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\WarehouseContactDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class WarehouseContactDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'contactId' => $this->faker->numberBetween(1, 1000),
            'companyName' => $this->faker->company(),
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
        return WarehouseContactDto::class;
    }
}
