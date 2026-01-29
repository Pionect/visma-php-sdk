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
            'baccount' => BaccountInLocationDtoFactory::new()->make(),
            'locationId' => $this->faker->uuid(),
            'locationName' => $this->faker->company(),
            'active' => $this->faker->boolean(),
            'address' => AddressInLocationDtoFactory::new()->make(),
            'contact' => ContactInLocationDtoFactory::new()->make(),
            'vatRegistrationId' => $this->faker->uuid(),
            'vatZone' => VatZoneInLocationDtoFactory::new()->make(),
            'ediCode' => $this->faker->word(),
            'gln' => $this->faker->word(),
            'corporateId' => $this->faker->uuid(),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'peppolScheme' => PeppolSchemeInLocationDtoFactory::new()->make(),
            'internalId' => $this->faker->numberBetween(1, 1000),
            'errorInfo' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return LocationDto::class;
    }
}
