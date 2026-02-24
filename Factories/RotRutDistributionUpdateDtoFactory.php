<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\RotRutDistributionUpdateDto;
use Pionect\VismaSdk\Enums\AttributeDetailUpdateOperationEnum;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\RotRutDistributionUpdateDto>
 */
class RotRutDistributionUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'operation' => $this->faker->randomElement(AttributeDetailUpdateOperationEnum::cases()),
            'lineNbr' => $this->faker->numberBetween(1, 100),
            'personalId' => $this->faker->uuid(),
            'amount' => null,
            'extra' => $this->faker->boolean(),
        ];
    }

    protected function modelClass(): string
    {
        return RotRutDistributionUpdateDto::class;
    }
}
