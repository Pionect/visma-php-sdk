<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\ExternalCode2infoInAccountDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ExternalCode2infoInAccountDtoFactory extends Factory
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
        return ExternalCode2infoInAccountDto::class;
    }
}
