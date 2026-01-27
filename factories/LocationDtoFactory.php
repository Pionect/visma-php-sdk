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
            'baccount' => $this->faker->word(),
            'locationId' => $this->faker->uuid(),
            'locationName' => $this->faker->company(),
            'active' => $this->faker->boolean(),
            'address' => $this->faker->word(),
            'contact' => $this->faker->word(),
            'vatRegistrationId' => $this->faker->uuid(),
            'vatZone' => $this->faker->word(),
            'ediCode' => $this->faker->word(),
            'gln' => $this->faker->word(),
            'corporateId' => $this->faker->uuid(),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'peppolScheme' => $this->faker->word(),
            'internalId' => $this->faker->numberBetween(1, 1000),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return LocationDto::class;
    }
}
