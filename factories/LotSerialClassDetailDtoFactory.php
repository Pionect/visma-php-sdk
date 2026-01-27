<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\LotSerialClassDetailDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class LotSerialClassDetailDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'segmentNumber' => $this->faker->numberBetween(1, 100),
            'value' => $this->faker->word(),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return LotSerialClassDetailDto::class;
    }
}
