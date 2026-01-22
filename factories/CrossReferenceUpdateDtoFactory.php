<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\CrossReferenceUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class CrossReferenceUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'operation' => $this->faker->word(),
            'alternateType' => $this->faker->word(),
            'bAccount' => $this->faker->word(),
            'alternateId' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'uom' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return CrossReferenceUpdateDto::class;
    }
}
