<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\LocationInInventoryIssueLineDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class LocationInInventoryIssueLineDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'countryId' => $this->faker->uuid(),
            'name' => $this->faker->name(),
        ];
    }

    protected function modelClass(): string
    {
        return LocationInInventoryIssueLineDto::class;
    }
}
