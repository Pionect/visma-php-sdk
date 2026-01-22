<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\VisibilityUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class VisibilityUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'visibleInGl' => $this->faker->word(),
            'visibleInAp' => $this->faker->word(),
            'visibleInAr' => $this->faker->word(),
            'visibleInSo' => $this->faker->word(),
            'visibleInPo' => $this->faker->word(),
            'visibleInEa' => $this->faker->word(),
            'visibleInTa' => $this->faker->word(),
            'visibleInIn' => $this->faker->word(),
            'visibleInCa' => $this->faker->word(),
            'visibleInCr' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return VisibilityUpdateDto::class;
    }
}
