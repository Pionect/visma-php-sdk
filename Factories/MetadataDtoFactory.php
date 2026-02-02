<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\MetadataDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class MetadataDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'totalCount' => $this->faker->numberBetween(1, 100),
            'maxPageSize' => $this->faker->numberBetween(1, 100),
        ];
    }

    protected function modelClass(): string
    {
        return MetadataDto::class;
    }
}
