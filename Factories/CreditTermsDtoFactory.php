<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CreditTermsDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CreditTermsDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'id' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return CreditTermsDto::class;
    }
}
