<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\WeightUominPackagingUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class WeightUominPackagingUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return WeightUominPackagingUpdateDto::class;
    }
}
