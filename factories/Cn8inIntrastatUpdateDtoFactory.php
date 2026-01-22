<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\Cn8inIntrastatUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class Cn8inIntrastatUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return Cn8inIntrastatUpdateDto::class;
    }
}
