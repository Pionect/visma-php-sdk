<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\VatZoneInBranchDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class VatZoneInBranchDtoFactory extends Factory
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
        return VatZoneInBranchDto::class;
    }
}
