<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\LotSerialClassDetailDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class LotSerialClassDetailDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'id' => $this->faker->word(),
            'segmentNumber' => $this->faker->numberBetween(1, 100),
            'type' => $this->faker->word(),
            'value' => $this->faker->word(),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return LotSerialClassDetailDto::class;
    }
}
