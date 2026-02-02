<?php

namespace Pionect\VismaSdk\Factories;

use Pionect\VismaSdk\Dto\BankSettingsInExtendedOrganizationDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class BankSettingsInExtendedOrganizationDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'bankName' => $this->faker->company(),
            'bankAddress1' => $this->faker->word(),
            'bankAddress2' => $this->faker->word(),
            'bankAddress3' => $this->faker->word(),
            'bankCountry' => $this->faker->word(),
            'iban' => $this->faker->word(),
            'bban' => $this->faker->word(),
            'bbaN2' => $this->faker->word(),
            'bbaN3' => $this->faker->word(),
            'bic' => $this->faker->word(),
            'creditorId' => $this->faker->uuid(),
        ];
    }

    protected function modelClass(): string
    {
        return BankSettingsInExtendedOrganizationDto::class;
    }
}
