<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\MainContactInBranchDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class MainContactInBranchDtoFactory extends Factory
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
        return MainContactInBranchDto::class;
    }
}
