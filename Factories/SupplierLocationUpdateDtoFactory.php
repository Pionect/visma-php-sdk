<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SupplierLocationUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SupplierLocationUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'baccountId' => $this->faker->uuid(),
            'locationId' => $this->faker->uuid(),
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
        ];
    }

    protected function modelClass(): string
    {
        return SupplierLocationUpdateDto::class;
    }
}
