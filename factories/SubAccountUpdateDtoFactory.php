<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SubAccountUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SubAccountUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'subaccountNumber' => $this->faker->word(),
            'subaccountId' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'active' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return SubAccountUpdateDto::class;
    }
}
