<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\BusinessAccountInEntryTypeDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class BusinessAccountInEntryTypeDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'type' => $this->faker->word(),
            'externalCode1' => $this->faker->word(),
            'externalCode2' => $this->faker->word(),
            'active' => $this->faker->boolean(),
            'number' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return BusinessAccountInEntryTypeDto::class;
    }
}
