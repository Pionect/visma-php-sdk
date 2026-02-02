<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\UomInAllocationsUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class UomInAllocationsUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return UomInAllocationsUpdateDto::class;
    }
}
