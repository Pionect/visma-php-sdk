<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\BarCodeMetadataDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class BarCodeMetadataDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'totalCount' => $this->faker->numberBetween(1, 100),
        ];
    }

    protected function modelClass(): string
    {
        return BarCodeMetadataDto::class;
    }
}
