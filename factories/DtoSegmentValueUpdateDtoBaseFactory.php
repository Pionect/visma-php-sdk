<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DtoSegmentValueUpdateDtoBase;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class DtoSegmentValueUpdateDtoBaseFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'operation' => $this->faker->word(),
            'value' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'active' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return DtoSegmentValueUpdateDtoBase::class;
    }
}
