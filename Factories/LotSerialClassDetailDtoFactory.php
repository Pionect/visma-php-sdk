<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\LotSerialClassDetailDto;
use Pionect\VismaSdk\Enums\LotSerialClassDetailTypeEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\LotSerialClassDetailDto>
 */
class LotSerialClassDetailDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'id' => $this->faker->word(),
            'segmentNumber' => $this->faker->numberBetween(1, 100),
            'type' => $this->faker->randomElement(LotSerialClassDetailTypeEnum::cases()),
            'value' => $this->faker->word(),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return LotSerialClassDetailDto::class;
    }
}
