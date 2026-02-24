<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\AllocationsBasicDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\AllocationsBasicDto>
 */
class AllocationsBasicDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'lineNbr' => $this->faker->numberBetween(1, 100),
            'location' => LocationDescriptionDtoFactory::new()->make(),
            'lotSerialNumber' => $this->faker->word(),
            'quantity' => null,
        ];
    }

    protected function modelClass(): string
    {
        return AllocationsBasicDto::class;
    }
}
