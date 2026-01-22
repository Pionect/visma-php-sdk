<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SalesOrderContactUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SalesOrderContactUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'overrideContact' => $this->faker->word(),
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
        return SalesOrderContactUpdateDto::class;
    }
}
