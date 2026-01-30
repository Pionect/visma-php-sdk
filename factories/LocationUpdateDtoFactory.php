<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\LocationUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class LocationUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'baccountId' => null,
            'locationId' => null,
            'locationName' => $this->faker->company(),
            'active' => $this->faker->boolean(),
            'addressIsSameAsMain' => $this->faker->boolean(),
            'address' => AddressUpdateDtoFactory::new()->make(),
            'contactIsSameAsMain' => $this->faker->boolean(),
            'contact' => ContactInfoUpdateDtoFactory::new()->make(),
            'vatRegistrationId' => $this->faker->uuid(),
            'vatZone' => $this->faker->word(),
            'ediCode' => $this->faker->word(),
            'gln' => $this->faker->word(),
            'corporateId' => $this->faker->uuid(),
            'peppolScheme' => PeppolSchemeUpdateDtoFactory::new()->make(),
        ];
    }

    protected function modelClass(): string
    {
        return LocationUpdateDto::class;
    }
}
