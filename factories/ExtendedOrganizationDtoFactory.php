<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\ExtendedOrganizationDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

class ExtendedOrganizationDtoFactory extends Factory
{
    protected function definition(): array
    {
        return [
            'organizationCd' => $this->faker->word(),
            'name' => $this->faker->name(),
            'organizationType' => $this->faker->word(),
            'fileTaxByBranches' => $this->faker->boolean(),
            'baseCurrency' => $this->faker->word(),
            'mainAddress' => $this->faker->word(),
            'mainContact' => $this->faker->word(),
            'deliveryAddress' => $this->faker->word(),
            'deliveryContact' => $this->faker->word(),
            'corporateId' => $this->faker->uuid(),
            'vatRegistrationId' => $this->faker->uuid(),
            'defaultCountry' => $this->faker->word(),
            'industryCode' => $this->faker->word(),
            'currency' => $this->faker->word(),
            'vatZone' => $this->faker->word(),
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'ledger' => $this->faker->word(),
            'bankSettings' => $this->faker->word(),
            'branches' => [],
            'timeStamp' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
        ];
    }

    protected function modelClass(): string
    {
        return ExtendedOrganizationDto::class;
    }
}
