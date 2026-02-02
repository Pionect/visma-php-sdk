<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ExternalCode1infoInAccountDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ExternalCode1infoInAccountDtoFactory extends Factory
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
        return ExternalCode1infoInAccountDto::class;
    }
}
