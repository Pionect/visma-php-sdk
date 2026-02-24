<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\RotRutUpdateDto;
use Pionect\VismaSdk\Enums\WorkTypeRutRotTypeEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\RotRutUpdateDto>
 */
class RotRutUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'distributedAutomaticaly' => $this->faker->boolean(),
            'type' => $this->faker->randomElement(WorkTypeRutRotTypeEnum::cases()),
            'appartment' => $this->faker->word(),
            'estate' => $this->faker->word(),
            'organizationNbr' => $this->faker->word(),
            'distribution' => [],
        ];
    }

    protected function modelClass(): string
    {
        return RotRutUpdateDto::class;
    }
}
