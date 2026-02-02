<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\LocationDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class LocationDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'baccount' => null,
            'locationId' => $this->faker->uuid(),
            'locationName' => $this->faker->company(),
            'active' => $this->faker->boolean(),
            'address' => null,
            'contact' => null,
            'vatRegistrationId' => $this->faker->uuid(),
            'vatZone' => null,
            'ediCode' => $this->faker->word(),
            'gln' => $this->faker->word(),
            'corporateId' => $this->faker->uuid(),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'peppolScheme' => null,
            'internalId' => $this->faker->numberBetween(1, 1000),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return LocationDto::class;
    }
}
