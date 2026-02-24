<?php

namespace Pionect\VismaSdk\Factories;

use Carbon\Carbon;
use Pionect\VismaSdk\Dto\ExtendedOrganizationDto;
use Pionect\VismaSdk\Foundation\Factories\Factory;

/**
 * @extends \Pionect\VismaSdk\Foundation\Factories\Factory<\Pionect\VismaSdk\Dto\ExtendedOrganizationDto>
 */
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
            'mainAddress' => null,
            'mainContact' => null,
            'deliveryAddress' => null,
            'deliveryContact' => null,
            'corporateId' => $this->faker->uuid(),
            'vatRegistrationId' => $this->faker->uuid(),
            'defaultCountry' => null,
            'industryCode' => null,
            'currency' => null,
            'vatZone' => null,
            'lastModifiedDateTime' => Carbon::now()->subDays($this->faker->numberBetween(0, 365)),
            'ledger' => null,
            'bankSettings' => null,
            'branches' => [],
            'timeStamp' => $this->faker->word(),
        ];
    }

    protected function modelClass(): string
    {
        return ExtendedOrganizationDto::class;
    }
}
