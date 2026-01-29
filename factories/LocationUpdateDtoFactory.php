<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\LocationUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class LocationUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'baccountId' => BaccountIdInLocationUpdateDtoFactory::new()->make(),
            'locationId' => LocationIdInLocationUpdateDtoFactory::new()->make(),
            'locationName' => $this->faker->company(),
            'active' => $this->faker->boolean(),
            'addressIsSameAsMain' => $this->faker->boolean(),
            'address' => $this->faker->word(),
            'contactIsSameAsMain' => $this->faker->boolean(),
            'contact' => $this->faker->word(),
            'vatRegistrationId' => $this->faker->uuid(),
            'vatZone' => $this->faker->word(),
            'ediCode' => $this->faker->word(),
            'gln' => $this->faker->word(),
            'corporateId' => $this->faker->uuid(),
            'peppolScheme' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return LocationUpdateDto::class;
    }
}
