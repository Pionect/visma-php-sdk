<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\DefSubInProjectDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\DefSubInProjectDto>
 */
class DefSubInProjectDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'active' => $this->faker->boolean(),
            'id' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }

    protected function modelClass(): string
    {
        return DefSubInProjectDto::class;
    }
}
