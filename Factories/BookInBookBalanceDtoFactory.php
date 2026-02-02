<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\BookInBookBalanceDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class BookInBookBalanceDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'bookId' => $this->faker->uuid(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return BookInBookBalanceDto::class;
    }
}
