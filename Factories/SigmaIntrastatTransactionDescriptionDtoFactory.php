<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SigmaIntrastatTransactionDescriptionDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\SigmaIntrastatTransactionDescriptionDto>
 */
class SigmaIntrastatTransactionDescriptionDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'id' => $this->faker->numberBetween(1, 100),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return SigmaIntrastatTransactionDescriptionDto::class;
    }
}
