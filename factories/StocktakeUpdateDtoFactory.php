<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\StocktakeUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class StocktakeUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'lines' => [],
        ];
    }

    protected function modelClass(): string
    {
        return StocktakeUpdateDto::class;
    }
}
