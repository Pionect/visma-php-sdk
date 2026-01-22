<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CogsAccountInInventoryAccountInformationDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CogsAccountInInventoryAccountInformationDtoFactory extends Factory
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
        return CogsAccountInInventoryAccountInformationDto::class;
    }
}
