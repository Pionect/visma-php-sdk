<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CogsAccountInInventoryUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CogsAccountInInventoryUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CogsAccountInInventoryUpdateDto::class;
    }
}
