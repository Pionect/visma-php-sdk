<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\LotSerialNumberInAllocationsUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class LotSerialNumberInAllocationsUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'value' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return LotSerialNumberInAllocationsUpdateDto::class;
    }
}
