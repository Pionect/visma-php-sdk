<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DescriptionInProjectUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DescriptionInProjectUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DescriptionInProjectUpdateDto::class;
    }
}
