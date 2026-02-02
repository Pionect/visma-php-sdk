<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\VisibilityInTaskExtendedDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class VisibilityInTaskExtendedDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'visibleInGl' => $this->faker->boolean(),
            'visibleInAp' => $this->faker->boolean(),
            'visibleInAr' => $this->faker->boolean(),
            'visibleInSo' => $this->faker->boolean(),
            'visibleInPo' => $this->faker->boolean(),
            'visibleInEa' => $this->faker->boolean(),
            'visibleInTa' => $this->faker->boolean(),
            'visibleInIn' => $this->faker->boolean(),
            'visibleInCa' => $this->faker->boolean(),
            'visibleInCr' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return VisibilityInTaskExtendedDto::class;
    }
}
