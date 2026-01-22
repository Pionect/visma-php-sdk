<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\AnalisysCodeInfoInAccountDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class AnalisysCodeInfoInAccountDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'number' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return AnalisysCodeInfoInAccountDto::class;
    }
}
