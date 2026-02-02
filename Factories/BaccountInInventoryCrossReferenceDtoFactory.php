<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\BaccountInInventoryCrossReferenceDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class BaccountInInventoryCrossReferenceDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'internalId' => $this->faker->numberBetween(1, 1000),
            'number' => $this->faker->word(),
            'name' => $this->faker->name(),
        ];
    }

    protected function modelClass(): string
    {
        return BaccountInInventoryCrossReferenceDto::class;
    }
}
