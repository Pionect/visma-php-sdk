<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\SupplierLocationUpdateDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class SupplierLocationUpdateDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'baccountId' => $this->faker->word(),
            'locationId' => $this->faker->word(),
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
        ];
    }

    protected function modelClass(): string
    {
        return SupplierLocationUpdateDto::class;
    }
}
