<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\RateTableInProjectDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\RateTableInProjectDto>
 */
class RateTableInProjectDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'id' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return RateTableInProjectDto::class;
    }
}
