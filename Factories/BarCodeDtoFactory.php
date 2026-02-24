<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\BarCodeDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\BarCodeDto>
 */
class BarCodeDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'barCode' => $this->faker->word(),
            'inventoryNumber' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return BarCodeDto::class;
    }
}
