<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DtoValueOfEmployeeTitles;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DtoValueOfEmployeeTitlesFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DtoValueOfEmployeeTitles::class;
    }
}
