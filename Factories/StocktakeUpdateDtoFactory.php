<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\StocktakeUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\StocktakeUpdateDto>
 */
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
